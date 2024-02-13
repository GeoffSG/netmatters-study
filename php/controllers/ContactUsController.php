<?php

class ContactUsController
{
    private $name;
    private $company;
    private $email;
    private $telephone;
    private $message;
    private $marketing;

    private $isValidArray = array(
        'name' => false,
        'company' => true,
        'email' => false,
        'telephone' => false,
        'message' => false,
        'marketing' => true
    );

    private $errorMessage;

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function send()
    {
        $this->name = $_POST['name'];
        $this->company = $_POST['company'];
        $this->email = $_POST['email'];
        $this->telephone = $_POST['telephone'];
        $this->message = $_POST['message'];

        $this->name = htmlspecialchars(strip_tags($this->name), ENT_QUOTES, 'UTF-8');
        $this->company = htmlspecialchars(strip_tags($this->company), ENT_QUOTES, 'UTF-8');
        $this->email = htmlspecialchars(strip_tags($this->email), ENT_QUOTES, 'UTF-8');
        $this->telephone = htmlspecialchars(strip_tags($this->telephone), ENT_QUOTES, 'UTF-8');
        $this->message = htmlspecialchars(strip_tags($this->message), ENT_QUOTES, 'UTF-8');

        if (isset($_POST['marketing'])) {
            $this->marketing = true;
        } else {
            $this->marketing = false;
        }

        try {
            $this->validate($this->name, $this->email, $this->telephone, $this->message);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        $sql = "INSERT INTO contact_us (sender, company, email, telephone, message, marketing) VALUES ('$this->name', '$this->company', '$this->email', '$this->telephone', '$this->message', '$this->marketing')";
        try {
            $this->db->connect();
            $this->db->query($sql);
            $this->db->disconnect();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return true;
    }

    private function validate($name, $email, $telephone, $message)
    {
        $this->errorMessage = array();

        if (strlen($name) < 3 || strlen($name) > 50 || !preg_match('/^[a-zA-Z\s]+$/', $name) || empty($name)) {
            $this->errorMessage['name'] = 'Your name is invalid. It should be between 3 and 50 characters long and contain only letters and spaces.';
        } else {
            $this->isValidArray['name'] = true;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
            $this->errorMessage['email'] = 'Your email is invalid. Please provide a valid email address.';
        } else {
            $this->isValidArray['email'] = true;
        }

        if (!preg_match('/^[0-9\s]+$/', $telephone) || empty($telephone)) {
            $this->errorMessage['telephone'] = 'Your telephone number is invalid. It should contain only numbers and spaces.';
        } else {
            $this->isValidArray['telephone'] = true;
        }

        if (strlen($message) < 10 || empty($message)) {
            $this->errorMessage['message'] = 'Your message is invalid. It should be at least 10 characters long.';
        } else {
            $this->isValidArray['message'] = true;
        }

        if (!empty($this->errorMessage)) {
            throw new Exception(implode(" - ", $this->errorMessage));
        }

    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function getMarketing()
    {
        return $this->marketing;
    }
    public function getCompany()
    {
        return $this->company;
    }
    public function isValid($key)
    {
        return $this->isValidArray[$key];
    }

}