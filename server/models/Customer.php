<?php

class Customer extends CI_Model {

    public function getCustomers() {
//        $this->load->database(); //HIEP- da autoload roi
        $query = "SELECT * FROM Customer ORDER BY customerId DESC";
        $resultSet = $this->db->query($query);

        return $resultSet->result();
    }
    
    public function getCustomerById($id) {
        return $this->db->where('customerId', $id) -> get('customer')->row();
    }

    public function getCustomerReqById($id) {
        $customers = $this->db->select('*')->from('customer')->join('requirement', 'customer.customerId=requirement.customerId', 'left')
                        ->where('customer.customerId', $id)->get()->result();
        return $customers;
    }

    public function getCustomersByFirstName($firstName) {
        $customer = $this->db->like('firstName', $firstName)->order_by('customerId', "desc")->get('customer')->result();
        return $customer;
    }

    public function getCustomersByType($firstName, $type) {
        // SELECT * FROM customer c left join Requirement r on c.customerid = r.customerId where r.type='in process' group by c.customerid
        $customers = $this->db->select('*')->from('customer')->join('requirement', 'customer.customerId=requirement.customerId', 'left')
                        ->like('firstName', $firstName)->where('type', $type)->group_by('customer.customerId')->get()->result();
        return $customers;
    }

    public function getLatestCustomer() {
        $last_row = $this->db->order_by('customerId', "desc")->limit(1)->get('customer')->row();
        return $last_row;
    }
    
    public function updateCustomer($customer) {
        $this->db-> where('customerId', $customer['customerId'])->update('customer', $customer);
    }
    
    public function deleteCustomer($id) {
        $this->db-> where('customerId', $id) -> delete('customer');
    }
    //code below to convert ass array to array of ass array
    public function convertArrForDocuments($documents, $requirementId) {
        if(array_key_exists('document0', $documents) && $documents['document0'] != '') {
            $convertedDoc = array();
            $keyOfDocuments = array_keys($documents);
            if (isset($documents) && count($documents) > 0) {
                for($i=0; $i< count($documents); $i++) {
                    if($i %2 == 1) {
                        $tempArr = array(
                            'requirementId' => $requirementId,
                            'name' => $documents[$keyOfDocuments[$i-1]],
                            'type' => $documents[$keyOfDocuments[$i]]
                        );
                        array_push($convertedDoc, $tempArr);
                    }
                }
            }
            return $convertedDoc;      
        }
    }
    public function addCustomer($customer, $requirement, $documents) {

        // add customer into db  
        $customer['uniqueCode'] = $this->generateRandomCode(6);
        $this->db->insert('customer', $customer);
        // get last customerID
        $latestCustomerId = $this->getLatestCustomer()->customerId;
        // add requirement with customerID
        $requirement['customerId'] = $latestCustomerId;
        $this->Requirement->addRequirement($requirement);
        // get last requirementId
        $latestRequirementId = $this->Requirement->getLatestRequirement()->requirementId;
        //add documents with requirementid, 
        $convertedDoc = $this->convertArrForDocuments($documents, $latestRequirementId);
        $this->Document->addDocuments($convertedDoc);
        
//        echo "<pre>";
//        print_r($convertedDoc);
//        echo "</pre>";
    }

    function generateRandomCode($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
