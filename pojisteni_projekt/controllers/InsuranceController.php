<?php
require_once 'models/Insurance.php';
require_once 'config/database.php';

class InsuranceController {
    private $db;
    private $insurance;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->insurance = new Insurance($this->db);
    }

    public function create($data) {
        $this->insurance->insured_id = $data['insured_id'];
        $this->insurance->type = $data['type'];
        $this->insurance->amount = $data['amount'];
        $this->insurance->start_date = $data['start_date'];
        $this->insurance->end_date = $data['end_date'];
        return $this->insurance->create();
    }

    public function read() {
        return $this->insurance->read();
    }

    public function update($data) {
        $this->insurance->id = $data['id'];
        $this->insurance->insured_id = $data['insured_id'];
        $this->insurance->type = $data['type'];
        $this->insurance->amount = $data['amount'];
        $this->insurance->start_date = $data['start_date'];
        $this->insurance->end_date = $data['end_date'];
        return $this->insurance->update();
    }

    public function delete($id) {
        $this->insurance->id = $id;
        return $this->insurance->delete();
    }

    public function findById($id) {
        $this->insurance->id = $id;
        return $this->insurance->findById();
    }
}
?>
