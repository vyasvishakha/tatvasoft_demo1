<?php 

class Event_model extends CI_Model{
  
    function save_event($data){
        $this->db->insert('event',$data);
        if($this->db->affected_rows() > 0){
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }
        return false;
    }

    function view_all_event(){
        $this->db->select("*");
        $this->db->from("event");
        $query = $this->db->get();        
        return $query->result();
    }

    function view_event($id){
        $this->db->select("*");
        $this->db->from("event");
        $this->db->where("id",$id);
        $query = $this->db->get();        
        return $query->row();
    }


}
?>