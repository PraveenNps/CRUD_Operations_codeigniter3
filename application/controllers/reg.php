<?php
class reg extends CI_Controller{
    public function register() {
        //$this->load->helper("form");
        $this->load->view('reg_form');

        //$this->load->library('form_validation');
        //$this->form_validation->set_rules("studentname","Student Name","required|min_length[3]");
        //$this->form_validation->set_rules("rollnumber","ROll Number","required|min_length[9]");
       // $this->form_validation->set_rules("mark1","Language 1","required|numerics");
       // $this->form_validation->set_rules("mark2","Language 2","required|numerics");
       // $this->form_validation->set_rules("mark3","Mathematics","required|numerics");
       // $this->form_validation->set_rules("mark4","Science","required|numerics");
       // $this->form_validation->set_rules("mark5","Language 1","required|numerics");
        

       // if($this->form_validation->run()=== true){
            
        //}
        //else{
         //   $this->load->view('reg_form');
        //}
       

    }
    public function savedata(){
        extract($_POST);
        $data=[
            'Student_Name'=>$studentname,
            'Roll_Number'=>$rollnumber,
            'Mark1'=>$mark1,
            'Mark2'=>$mark2,
            'Mark3'=>$mark3,
            'Mark4'=>$mark4,
            'Mark5'=>$mark5
            
        ];
       


       $this->load->model('reg_model');
       $result=$this->reg_model->insertdata($data);
        if($result){
            $res['status']='Successfully Registered';
           $this->load->view('reg_form',$res);
         
   }else{
       $res['status']= 'Error';
      
    }

 }
 public function fetchdata(){
    $this->load->model('reg_model');
   $result['table']= $this->reg_model->getRecord();
   $this->load->view('display_records',$result);

 }
 public function update($id){
    $this->load->model('reg_model');
    $result['data']=$this->reg_model->displayrecordsById($id);
    $this->load->view('update',$result);

 }
 public function updatedata($id){
    extract($_POST);
        $data=[
            'Student_Name'=>$studentname,
            'Roll_Number'=>$rollnumber,
            'Mark1'=>$mark1,
            'Mark2'=>$mark2,
            'Mark3'=>$mark3,
            'Mark4'=>$mark4,
            'Mark5'=>$mark5
            
        ];
        $this->load->model('reg_model');
       $result=$this->reg_model->update_records($id,$data);
       if($result){
        redirect(base_url('reg/fetchdata/'));
     
}

 }
 public function delete($id){
    
  $this->load->model('reg_model');
  $result=$this->reg_model->delete_model($id);
  if($result==true){
    //echo"Delete seccessfully";
    redirect(base_url('reg/fetchdata/'));
  
  }
 

 }
}
 



