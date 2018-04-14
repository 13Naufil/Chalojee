<?php
Class Common extends CI_Model {


    public function add($data){
        // print_r($data); exit;
        $this->db->insert('c_destination', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }



}
?>