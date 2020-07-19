<?php
class Writer extends MY_Controller
{
public function __construct(){

    parent::__construct();
    if(!$this->session->userdata('Id'))
    {
      redirect('Login');
    }
    
    
    
    
    
    

}
        public function ArticleValidation(){
            if($this->form_validation->run('AddArticleRule'))
            {
             $All=$this->input->post();
             $this->load->model('LoginModel');
             if($this->LoginModel->AddArticles($All))
             {
                 $this->session->set_flashdata("msg","Article added successfully");
                 $this->session->set_flashdata("msg_class","alert-success");
             }
             else
             {
                $this->session->set_flashdata("msg","Article not Added!!! Try Again");
                $this->session->set_flashdata("msg_class","alert-danger");
             }

             return redirect('Writer/Welcome');
             }
            else
            {
                $this->load->view('Writer/AddArticles');
            }
        }
            
    
    
    
    
    

public function welcome(){

    $this->load->model('LoginModel');
    $this->load->library('pagination');
    $config = [ 
    'base_url' => base_url("index.php/Writer/welcome"),
    'total_rows' => $this->LoginModel->NumRows(),
    'per_page' => 2,
    
  ];
    $this->pagination->initialize($config);
    $Articles=$this->LoginModel->ArticleList($config['per_page'],$this->uri->segment(3));

 $this->load->view('Writer/DashBoard',['Articles'=>$Articles]); 

}    
    
    
    
    
    

public function AddArt(){
    $this->load->view("Writer/AddArticles");
}    
    
    
    
    
    

public function DeleteArt(){
$Id=$this->input->post('Id');
$this->load->model('LoginModel');

if($this->LoginModel->del("$Id"))
{
    $this->session->set_flashdata('msg',"You have deleted one article permanently ");
    $this->session->set_flashdata('msg_class',"alert-success");
}
else
{
    $this->session->set_flashdata('msg',"You can't delete this article!! try again ");
    $this->session->set_flashdata('msg_class',"alert-warning");

}
return redirect('Writer/welcome');
}    
    
    
    
    
    

public function EditArticle(){
    
    $Id=$this->input->post('Id');
    if($Id)
   { 
    $this->load->model('LoginModel');
    $zt=$this->LoginModel->FindArt("$Id");
     $this->load->view('Writer/EditArticle',['Article'=>$zt]);}
    else
    {return redirect('Writer/welcome');}

    }

    public function UpdateArticle(){
       
        if($this->form_validation->run('AddArticleRule'))
        {
            $Article=$this->input->post();
         $ArticleId=$this->input->post('ArticleId');
       $ArticleTitle=$Article['Title']; 
        $ArticleBody= $Article['Body'];
         $this->load->model('LoginModel');
         if($this->LoginModel->UpdateArticle("$ArticleId","$ArticleTitle","$ArticleBody")==1)
         {
             $this->session->set_flashdata("msg","Article Edited successfully");
             $this->session->set_flashdata("msg_class","alert-success");
         }
         else
         {
            $this->session->set_flashdata("msg","Article not Edited!!! Try Again");
            $this->session->set_flashdata("msg_class","alert-danger");
         }

         return redirect('Writer/Welcome');
         }
        else
        {
            $this->load->view('Writer/EditArticle');
        }
        
        
  }    
    
    

public function Logout(){
$this->session->unset_userdata('Id');
$this->session->sess_destroy();
return redirect('Login');
     }
    
    
    
    
    
    

}
?>