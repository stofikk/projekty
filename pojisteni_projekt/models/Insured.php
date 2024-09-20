<?php

class Insured {
    private $firstName;
    private $lastName;
    private $age;
    private $phone;

    public function __construct($firstName, $lastName, $age, $phone) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function __toString() {
        return $this->firstName . ' ' . $this->lastName . ', ' . $this->age . ' years old, Phone: ' . $this->phone;
    }
}
?>
