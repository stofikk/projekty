<?php
require_once 'models/Claim.php';
require_once 'config/database.php';

class ClaimController {
    private $db;
    private $claim;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->claim = new Claim($this->db);
    }

    public function create($data) {
        $this->claim->insurance_id = $data['insurance_id'];
        $this->claim->description = $data['description'];
        $this->claim->amount = $data['amount'];
        $this->claim->date = $data['date'];
        return $this->claim->create();
    }

    public function read() {
        return $this->claim->read();
    }

    public function update($data) {
        $this->claim->id = $data['id'];
        $this->claim->insurance_id = $data['insurance_id'];
        $this->claim->description = $data['description'];
        $this->claim->amount = $data['amount'];
        $this->claim->date = $data['date'];
        return $this->claim->update();
    }

    public function delete($id) {
        $this->claim->id = $id;
        return $this->claim->delete();
    }

    public function findById($id) {
        $this->claim->id = $id;
        return $this->claim->findById();
    }
}
?>
