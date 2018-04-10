<?php
Class Destination extends CI_Model {

    public function fetchall() {

        $this->db->select('*');
        $this->db->from('c_destination');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add($data){
       // print_r($data); exit;
        $this->db->insert('c_destination', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function update($data,$id){

        $this->db->where('id',$id);
        $this->db->update('c_destination',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('c_destination');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function fetchbyid($id){
        $condition = "CityCode=".$id;
        $this->db->select('*');
        $this->db->from('c_destination');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function fetchbyStr($str,$limit)
    {
        $sql = "SELECT CityCode,CityName FROM c_destination WHERE CityName LIKE '%$str%' LIMIT ".$limit;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
?>