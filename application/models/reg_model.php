<?php
class reg_model extends CI_Model{
public function insertdata($data){
       $this->load->database();
       return $this->db->insert('crud_db',$data);
     //  print_r(return);

     
    }
    public function getRecord(){
        $this->load->database();
        return $this->db->get('crud_db')->result();
       // echo '<pre>';
        // print_r(result);
        // echo '</pre>';
        
    }
    public function displayrecordsById($id){
        $this->load->database();
        return $this->db->where('id',$id)->get('crud_db')->row();

    }
    public function update_records($id,$data){
        $this->load->database();
        return $this->db->where('id',$id)->update('crud_db',$data);

    }
    public function delete_model($id){
        $this->load->database();
     $this->db->where('id',$id);
     $this->db->delete('crud_db');
     return true;
     



    }
}