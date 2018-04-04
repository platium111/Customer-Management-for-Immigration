<?php

class Staff extends CI_Model {
    public function getStaffByFirstName($firstName) {
        $staff = $this->db->like('firstName', $firstName)-> get('staff')->result();
        return $staff;
    }
    
    public function getStaffById($id) {
        $staff = $this -> db-> where('staffId', $id) -> get('staff') -> row();
        return $staff;
    }
    
    public function getStaffs() {
        $staffs = $this->db-> get('staff')->result();
        return $staffs;
    }
}
