<?php

class RequirementController extends CI_Controller {
    public function formatDateDbToView($originalDate) {
        return date("m/d/Y", strtotime($originalDate));
    }
    
    public function editRequirementById($requirementId, $customerId) {
        $this->load->helper('form');
        // format date from db to view
        $customer = $this -> Customer -> getCustomerById($customerId);
        $customer-> birthDate = $this->formatDateDbToView($customer->birthDate); 
        $requirement = $this -> Requirement -> getRequirementById($requirementId);
        $requirement -> returnDate = $this->formatDateDbToView($requirement->returnDate);
        // get data and put into view
        $documents = $this->Document -> getDocumentsByReqId($requirementId);
        $staffs = $this->Staff-> getStaffs();
        $data['customer'] = $customer;        
        $data['requirement'] = $requirement;
        $data['documents'] = $documents;
        $data['staffs'] = $staffs;
        
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";        
        $this->load->view('staff_edit_requirement', $data);
    }
}
