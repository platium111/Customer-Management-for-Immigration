<?php

class Requirement extends CI_Model {

    public function addRequirement($requirement) {
        // add customer into db        
        $this->db->insert('requirement', $requirement);
    }
    
    public function updateRequirement($requirement) {
        $this->db->where('requirementId', $requirement['requirementId'])->update('requirement', $requirement);
    }
    
    public function getLatestRequirement() {
        $last_row=$this->db->order_by('requirementId',"desc")->limit(1)->get('requirement')->row();
        return $last_row;
    }
    
    public function getRequirementById($requirementId) {
        return $this->db-> where('requirementId', $requirementId) -> get('requirement') -> row();
    }

}
