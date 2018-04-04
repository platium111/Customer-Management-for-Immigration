<?php

class Document extends CI_Model {

    public function addDocuments($documents) {
        // add customer into db 
        if (count($documents) > 0) {
            foreach ($documents as $document) {
                $this->db->insert('document', $document);
            }
        }
    }

    public function deleteDocuments($requirementId) {
        $this->db->where('requirementId', $requirementId)->delete('document');
    }

    public function getDocumentsByReqId($requirementId) {
        $documents = $this->db->where('requirementId', $requirementId)->get('document')->result();
        return $documents;
    }

}
