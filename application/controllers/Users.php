<?php

class Users extends CI_Controller{

  // $this->load->dbforge();
  // $this->load->dbutil();
   // public function show($user_id){
   //   //$this->load->model('User_model');
   //   $data['results'] = $this->user_model->get_users($user_id,'abhay');
   //
   //  // $data['result']="Welcome to my page";
   //   $this->load->view('user_view',$data);
   //
   //   // foreach ($result as $object) {
   //   //   // code...
   //   //   echo $object->id . "<br>";
   //   // }
   // }
   public function login(){

     //echo $_POST['username'];
      // $this->input->post('username');
      $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');

      if($this->form_validation->run() == FALSE){

        $data = array(

          'errors' => validation_errors()
        );

        $this->session->set_flashdata($data);
      }

   }
//    public function insert(){
//
//       $username = "peter";
//       $password = "secret";
//
//      $this->user_model->create_users([
//
//        'username' => $username,
//        'password' => $password
//        ]);
//    }
//
//    public function update(){
//       $id = 3;
//       $username = "willai";
//       $password = "notsecret";
//
//      $this->user_model->update_users([
//
//        'username' => $username,
//        'password' => $password
//      ],$id);
//    }
//
//    public function delete(){
//      $id = 3;
//      $this->user_model->delete_users($id);
//    }
}




 ?>
