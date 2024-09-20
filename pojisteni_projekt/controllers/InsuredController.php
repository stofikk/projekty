<?php
require_once __DIR__ . '/../models/Insured.php';

class InsuredController {
    private $insuredList = [];

    public function __construct() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['insuredList'])) {
            $this->insuredList = $_SESSION['insuredList'];
        } else {
            // Add some initial insured persons
            $this->insuredList = [
                new Insured("Jan", "Novák", 30, "123456789"),
                new Insured("Petr", "Svoboda", 45, "987654321"),
                new Insured("Marie", "Dvořáková", 29, "456123789"),
            ];
            $_SESSION['insuredList'] = $this->insuredList;
        }
    }

    public function create() {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $insured = new Insured($firstName, $lastName, $age, $phone);
        $this->insuredList[] = $insured;
        $_SESSION['insuredList'] = $this->insuredList;
        header('Location: index.php');
    }

    public function index() {
        return $this->insuredList;
    }
}
?>
