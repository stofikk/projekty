<?php

class Claim {
    private $conn;
    private $table_name = "claims";

    public $id;
    public $insurance_id;
    public $description;
    public $amount;
    public $date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET insurance_id=:insurance_id, description=:description, amount=:amount, date=:date";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":insurance_id", $this->insurance_id);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":date", $this->date);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET insurance_id=:insurance_id, description=:description, amount=:amount, date=:date WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":insurance_id", $this->insurance_id);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }

    public function findById() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
