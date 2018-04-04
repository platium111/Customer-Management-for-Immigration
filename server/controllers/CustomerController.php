<?php
class CustomerController extends CI_Controller {

    //HIEP-Error: phai dung constructor moi chay duoc load helper va dung cho redirect
    // redirect se tu trang nay chuyen sang trang khac
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function viewCustomers() {
        $this->load->helper('form');
        
        $customers = $this->Customer->getCustomers();
        $data['customers'] = $customers;
        $this->load->view('staff_homepage', $data);
    }

    public function getLatestCustomer() {
        $customer = $this->Customer->getLatestCustomer();
        $data['latestCustomer'] = $customer;
        $this->load->view('staff_homepage', $data);
    }

    public function loadAddCustomerView() {
        $this->load->helper('form');
        //fixing
        $listOfTakenStaff = $this->Staff->getStaffs();
        $data['staffs'] = $listOfTakenStaff;
        $this->load->view('staff_add_customer', $data);
    }

    public function getCustomersBy() {
        $this->load->helper('form');

        $firstName = $_POST['firstName'];
//        $chooseFirstName = $_POST['chooseFirstName'];
        $typeOfSearch = $_POST['typeOfSearch'];
        $customers[] = NULL;
        $data[] = NULL;
        if (isset($typeOfSearch)) {
            if ($typeOfSearch == 'none') {
                $customers = $this->Customer->getCustomersByFirstName($firstName);
            } else {
                $customers = $this->Customer->getCustomersByType($firstName, $typeOfSearch);
            }
            $data['customers'] = $customers;
//            $data['chooseFirstName'] = 'firstName'; // set value back to radio firstName

            $this->load->view('staff_homepage', $data);
        }
    }

    public function addStaffFormatToCus($arr) {

        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i]->staffTaken = '';
            $arr[$i]->staffReturn = '';
            if ($this->Staff->getStaffById($arr[$i]->staffTakenId) != NULL) {
                $arr[$i]->staffTaken = $this->Staff->getStaffById($arr[$i]->staffTakenId)->firstName . ' '
                        . $this->Staff->getStaffById($arr[$i]->staffTakenId)->lastName;
            }
            if ($this->Staff->getStaffById($arr[$i]->staffReturnId) != NULL) {
                $arr[$i]->staffReturn = $this->Staff->getStaffById($arr[$i]->staffReturnId)->firstName . ' '
                        . $this->Staff->getStaffById($arr[$i]->staffReturnId)->lastName;
            }
        }
        return $arr;
    }

    public function getCustomerReqById($id) {
        $customers = $this->Customer->getCustomerReqById($id);
        $data['customers'] = $this->addStaffFormatToCus($customers);
        $this->load->view('staff_customer_detail', $data);
    }

    public function matchDocId($name) {
        $pattern1 = 'documentId*';
        if (fnmatch($pattern1, $name)) {
            return true;
        } else {
            return false;
        }
    }

    public function matchDocWithType($name) {

        $pattern1 = 'documents*';
        $pattern2 = 'typeOfScan*';

        if (fnmatch($pattern1, $name) || fnmatch($pattern2, $name)) {
            return true;
        } else {
            return false;
        }
    }

    public function addCustomer() {
        $this->load->helper('form');

        // skip null documents
        $flagSkip = false;
        $dataFromDoc = array();
        if (!empty($_POST)) {
            // get all post data in one nice array
            foreach ($_POST as $key => $value) {
                if ($flagSkip) {
                    $flagSkip = false;
                    continue;
                }
                if ($this->matchDocWithType($key)) {
                    if (empty($value) || $value == "") {
                        $flagSkip = true;
                        continue;
                    }
                    $dataFromDoc[$key] = $value;
                }
            }
        }
        // grap data from form
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $streetName = $_POST['streetName'];
        $suburb = $_POST['suburb'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postcode = $_POST['postCode'];
        $phoneNumber = $_POST['phoneNumber'];
        $email0 = $_POST['email0'];
        $email1 = $_POST['email1'];
        $email2 = $_POST['email2'];
        $facebookLink = $_POST['facebookLink'];
        $requirementStatus = $_POST['requirementStatus'];
        $document0 = $_POST['documents0'];
        $staffTaken = $_POST['staffTaken'];
        $staffReturn = $_POST['staffReturn'];
        $returnDate = $_POST['returnDate'];

        $dob = date('Y-m-d', strtotime($dob));
        $returnDate = date('Y-m-d', strtotime($returnDate));
        $customer = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $dob,
            'country' => $country,
            'streetName' => $streetName,
            'suburb' => $suburb,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'phoneNumber' => $phoneNumber,
            'email0' => $email0,
            'email1' => $email1,
            'email2' => $email2,
            'facebookLink' => $facebookLink,
            'uniqueCode' => $this->Customer->generateRandomCode(6)
        );
        $requirement = array(
            'status' => $requirementStatus,
            'customerId' => '',
            'submitByCusDate' => date("Y-m-d H:i:s"),
            'staffTakenId' => $staffTaken,
            'staffReturnId' => $staffReturn,
            'returnDate' => $returnDate
        );
        $dataFromDoc['document0'] = $document0;
        $this->Customer->addCustomer($customer, $requirement, $dataFromDoc);
        $customers = $this->Customer->getCustomers();
        $data['customers'] = $customers;
        $this->load->view('staff_homepage', $data);
    }

    public function editCustomer($requirementId, $customerId) {
        $this->load->helper('form');
        $flagSkip = false;
        $dataFromDoc = array();
        $dataFromDocId = array();
        if (!empty($_POST)) {
            // get all post data in one nice array
            foreach ($_POST as $key => $value) {
                if ($flagSkip) {
                    $flagSkip = false;
                    continue;
                }
                if ($this->matchDocWithType($key)) {
                    if (empty($value) || $value == "") {
                        $flagSkip = true;
                        continue;
                    }
                    $dataFromDoc[$key] = $value;
                }
                if ($this->matchDocId($key)) {
                    $dataFromDocId[$key] = $value;
                }
            }
        }
        
        // grap data from form
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $dob = filter_input(INPUT_POST, 'dob');
        $country = filter_input(INPUT_POST, 'country');
        $streetName = filter_input(INPUT_POST, 'streetName');
        $suburb = filter_input(INPUT_POST, 'suburb');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $postcode = filter_input(INPUT_POST, 'postCode');
        $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
        $email0 = filter_input(INPUT_POST, 'email0');
        $email1 = filter_input(INPUT_POST, 'email1');
        $email2 = filter_input(INPUT_POST, 'email2');
        $facebookLink = filter_input(INPUT_POST, 'facebookLink');
        $requirementStatus = filter_input(INPUT_POST, 'requirementStatus');
        $document0 = filter_input(INPUT_POST, 'documents0');
        $staffTaken = filter_input(INPUT_POST, 'staffTaken');
        $staffReturn = filter_input(INPUT_POST, 'staffReturn');
        $returnDate = filter_input(INPUT_POST, 'returnDate');

        $dob = date('Y-m-d', strtotime($dob));
        $returnDate = date('Y-m-d', strtotime($returnDate));
        $customer = array(
            'customerId' => $customerId,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $dob,
            'country' => $country,
            'streetName' => $streetName,
            'suburb' => $suburb,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'phoneNumber' => $phoneNumber,
            'email0' => $email0,
            'email1' => $email1,
            'email2' => $email2,
            'facebookLink' => $facebookLink,
            'uniqueCode' => $this->Customer->generateRandomCode(6)
        );
        $requirement = array(
            'requirementId' => $requirementId,
            'status' => $requirementStatus,
            'submitByCusDate' => date("Y-m-d H:i:s"),
            'staffTakenId' => $staffTaken,
            'staffReturnId' => $staffReturn,
            'returnDate' => $returnDate
        );
        $this->Customer->updateCustomer($customer);
        $this->Requirement->updateRequirement($requirement);
        $dataFromDoc['document0'] = $document0; // use to validate exist of document added
        $documents = $this->Customer->convertArrForDocuments($dataFromDoc, $requirementId);
        // truoc: $dataFromDocId  ~     [documentId0] => 80
        // sau: $documents nhung chua co documentId
        for($k=0; $k<count($documents); $k++) {
            $documents[$k]['documentId'] = '';
        }
        
        foreach ($dataFromDocId as $id) {
            $this->db->where('documentId', $id) -> delete('document');
        }
        $this->db->insert_batch('document', $documents);
        // code use for replace just for reference
//        $this->db->where('requirementId', $requirementId) ->delete('document');
//        
//        for ($i = 0; $i < count($dataFromDocId); $i++) {
//            $documents[$i]['documentId'] = $dataFromDocId['documentId'.$i];
//            $this->db->replace('document', $documents[$i]);
//        }
//        $this->Document->deleteDocuments($requirementId);
        
//        foreach ($documents as $document) {
//            $this->db->replace('document', $document);
//        }

        $data['identifyPage'] = 'edit';
        $customers = $this->Customer->getCustomers();
        $data['customers'] = $customers;
        $this->load->view('staff_homepage', $data);
//        redirect('./customerController/viewCustomers');
    }
    
    public function deleteCustomerReqById($id) {
        $this->load->helper('form');
        $this -> Customer -> deleteCustomer($id);
        $customers = $this->Customer->getCustomers();
        $data['customers'] = $customers;
        $this->load->view('staff_homepage', $data);
    }

    public function display() {
        $customers = $this->Customer->getCustomersByType('Chuan', 'in process');
        var_dump($customers);
        $this->load->view('staff_homepage');
    }

}

?>
