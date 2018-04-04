<?php

class DocumentController extends CI_Controller {

    public function getDocumentsByReqId($requirementId) {
        $documents = $this -> Document -> getDocumentsByReqId($requirementId);
        echo json_encode($documents);
    }
}
