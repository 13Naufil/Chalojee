<?php
Class Customer extends CI_Model {

    public function fetchall() {

        $this->db->select('*');
        $this->db->from('c_customers');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add($data){
        $this->db->insert('c_customers', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function update($data,$id){

        $this->db->where('id',$id);
        $this->db->update('c_customers',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('c_customers');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function fetchbyid($id){
        $condition = "id=".$id;
        $this->db->select('*');
        $this->db->from('c_customers');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function login($data) {
        $condition = "Email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('c_customers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return 0;
        }
    }
}
?>