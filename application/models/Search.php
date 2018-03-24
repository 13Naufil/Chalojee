<?php
Class Search extends CI_Model {

    public function fetchall() {

        $this->db->select('*');
        $this->db->from('c_designation');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add($data){
       // print_r($data); exit;
        $this->db->insert('c_designation', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function update($data,$id){

        $this->db->where('id',$id);
        $this->db->update('c_designation',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('c_designation');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function fetchbyid($id){
        $condition = "id=".$id;
        $this->db->select('*');
        $this->db->from('c_designation');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
?>