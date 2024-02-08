<?php

class ContactUsController
{
    private $name;
    private $company;
    private $email;
    private $telephone;
    private $message;
    private $marketing;

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function send()
    {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];

        $name = htmlspecialchars(strip_tags($name), ENT_QUOTES, 'UTF-8');
        $company = htmlspecialchars(strip_tags($company), ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars(strip_tags($email), ENT_QUOTES, 'UTF-8');
        $telephone = htmlspecialchars(strip_tags($telephone), ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars(strip_tags($message), ENT_QUOTES, 'UTF-8');

        if (isset($_POST['marketing'])) {
            $marketing = true;
        } else {
            $marketing = false;
        }

        try {
            $this->validate($name, $email, $telephone, $message);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        $sql = "INSERT INTO contact_us (sender, company, email, telephone, message, marketing) VALUES ('$name', '$company', '$email', '$telephone', '$message', '$marketing')";
        try {
            $this->db->connect();
            $this->db->query($sql);
            $this->db->disconnect();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function validate($name, $email, $telephone, $message)
    {
        if (!isset($name) || !isset($email) || !isset($telephone) || !isset($message)) {
            throw new Exception('All fields are required - isset check failed');
        } elseif (empty($name) || empty($email) || empty($telephone) || empty($message)) {
            throw new Exception('All fields are required - empty check failed');
        }

        if (strlen($name) < 3) {
            echo 'Your name must be at least 3 characters long<br>';
            throw new Exception('Your name must be at least 3 characters long');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email address');
        }

        if (!preg_match('/^[0-9\s]+$/', $telephone)) {
            throw new Exception('Invalid telephone number');
        }

        if (strlen($message) < 10) {
            throw new Exception('Your message must be at least 10 characters long');
        }

    }

}