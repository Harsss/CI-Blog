<?php
class Users extends MY_controller
{

public function index(){

$this->load->model('LoginModel');
$Articles=$this->LoginModel->AllArticles();
$this->load->view('Users/ArticleList',['Articles'=>$Articles]); 
}


}
?>