
<?php

/**
 * This file is the controller for the database operations.
 * It handles the connection to the database and executes queries.
 */
class DatabaseController {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    
    /**
     * DatabaseController constructor.
     *
     * @param string $host     The host name of the database server.
     * @param string $username The username for accessing the database.
     * @param string $password The password for accessing the database.
     * @param string $database The name of the database.
     */
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    /**
     * Connects to the database.
     */
    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
    }
    
    /**
     * Disconnects from the database.
     */
    public function disconnect() {
        $this->connection = null;
        echo "Disconnected from MySQL database successfully!";
    }

    /**
     * Executes a SELECT query on the database.
     *
     * @param string $query The SELECT query to be executed.
     * @return mixed The result of the query execution.
     */
    public function select($query) {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error selecting data: " . $e->getMessage();
        }
    }
}
