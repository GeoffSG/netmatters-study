<?php
class User {
    private $firstName;
    private $lastName;
    private $profileImage;

    // Constructor
    public function __construct($firstName, $lastName, $profileImage) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->profileImage = $profileImage;
    }

    // Getters and Setters
    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getProfileImage() {
        return $this->profileImage;
    }

    public function setProfileImage($profileImage) {
        $this->profileImage = $profileImage;
    }
}
