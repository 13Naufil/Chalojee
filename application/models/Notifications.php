<?php
Class Notifications extends CI_Model {

    public function fetchall() {

        $this->db->select('*');
        $this->db->from('c_notifications');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add($data){
        $this->db->insert('c_notifications', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function update($data,$id){

        $this->db->where('CityCode',$id);
        $this->db->update('c_notifications',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('c_notifications');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function fetchbyid($id){
        $condition = "CityCode=".$id;
        $this->db->select('*');
        $this->db->from('c_notifications');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function check($id){
        $condition = "CityCode=".$id;
        $this->db->select('*');
        $this->db->from('c_notifications');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
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