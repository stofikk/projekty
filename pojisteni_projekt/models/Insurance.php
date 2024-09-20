<?php

class Insurance {
    private $conn;
    private $table_name = "insurance";

    public $id;
    public $insured_id;
    public $type;
    public $amount;
    public $start_date;
    public $end_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET insured_id=:insured_id, type=:type, amount=:amount, start_date=:start_date, end_date=:end_date";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":insured_id", $this->insured_id);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":start_date", $this->start_date);
        $stmt->bindParam(":end_date", $this->end_date);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET insured_id=:insured_id, type=:type, amount=:amount, start_date=:start_date, end_date=:end_date WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":insured_id", $this->insured_id);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":start_date", $this->start_date);
        $stmt->bindParam(":end_date", $this->end_date);
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
