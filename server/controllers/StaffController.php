<?php

class StaffController extends CI_Controller {

    public function getStaffByFirstName($staffTaken) {
        $this->load->helper('form');

//        if (isset($_REQUEST['staffTaken'])) {
//            $staffTaken = $_REQUEST['staffTaken'];
        $listOfTakenStaff = $this->Staff->getStaffByFirstName($staffTaken);
        $data[] = NULL;
        foreach ($listOfTakenStaff as $staff) { // $listOfTakenStaff is array of objects
            $data[] = array('staffId' => $staff->staffId, 'fullName' => $staff->firstName . ' ' . lastName);
        }

        echo json_encode($data);
    }

}
