<?php
class Login extends MY_Controller
{    

    public function __construct(){

        parent::__construct();
        if($this->session->userdata('Id'))
        {
          redirect('Writer/Welcome');
        }
           
    
    
    }


    public function Register(){

        $this->load->view("Writer/Register");
        }
        
public function SendEmail(){

    $this->form_validation->set_rules('Username', 'User name', 'required|alpha');
    $this->form_validation->set_rules('Password', 'Password ', 'required|min_length[5]');
    $this->form_validation->set_rules('Email', 'Email id', 'required|valid_email|is_unique[user.email_id]');
    $this->form_validation->set_rules('Contact', 'Contact', 'min_length[9]');
    
if($this->form_validation->run())
{
    $All=$this->input->post();
    $this->load->model('LoginModel');
    if($this->LoginModel->AddUser($All))
    {
      $this->session->set_flashdata('UserAdd',"Register complete successfully!! ");
      $this->session->set_flashdata('UserAdd_Class',"alert alert-success");
    }
    else
    {

      $this->session->set_flashdata('UserAdd',"Register diddn't happened, Please try again!!");
      $this->session->set_flashdata('UserAdd_Class',"alert alert-danger");
    }
return redirect ('Login/index');
}
else{

    $this->load->view('Writer/Register');
}

}

    public function index(){
     
    $this->form_validation->set_rules('UserName', 'User name of the user', 'required|alpha');
    $this->form_validation->set_rules('Password', 'Password of the user', 'required|min_length[5]');

if($this-> form_validation->run()){

$UserName=$this->input->post('UserName');
$Password=$this->input->post('Password');

$this->load->model('LoginModel');

$Id=$this->LoginModel->isvalidate($UserName,$Password);

if($Id){
$this->load->library('session');
$this->session->set_userdata('Id',$Id);

return redirect('Writer/welcome');

}

else
{
 //echo "Sorrry! your details are not match ";
 $this->session->set_flashdata('Login_failed','Invalid Username/Password');
 redirect('Login');   



}

}
else{

$this->load->view('Writer/Login');
 
}
}}
?>