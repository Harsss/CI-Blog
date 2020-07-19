<?php
class loginmodel extends CI_Model  
{
public function isvalidate($UserName,$Password){

$q=$this->db->where(['Username' =>$UserName, 'Password'=>$Password])
             ->get('user');

        
        if($q->num_rows())
        {return $q->row()->Id;
        }
        else
        {return False;
        }



}
public function ArticleList($Limit,$Offset){
      
$ID=$this->session->userdata('Id');
        $ro=$this->db->select('*')
                -> from('artcles')
                ->where(['UserId'=>$ID])
                ->limit($Limit,$Offset)
                ->get();

              return $ro->result();
}
public function AddArticles($array){

  $Title= $array['Title'];
   $Body=$array['Body'];
   $Id=$array['user_Id'];

$sql='INSERT INTO `artcles` (`Title`, `ArticleBody`, `UserId`) VALUES ('.$this->db->escape($Title).', '.$this->db->escape($Body).', '.$this->db->escape($Id).')';
$this->db->query($sql);
$Affected_Rows=$this->db->affected_rows();
return $Affected_Rows; 
}



public function AddUser($array){

        $Email= $array['Email'];
         $Password=$array['Password'];
         $Username=$array['Username'];
         $Contact=$array['Contact'];

 $sql='INSERT INTO `user` (`email_id`, `Username`, `Password`, `Contact`) VALUES ('.$this->db->escape($Email).', '.$this->db->escape($Username).', '.$this->db->escape($Password).', '.$this->db->escape($Contact).')';
      $this->db->query($sql);
      $Affected_Rows=$this->db->affected_rows();
      return $Affected_Rows; 
      }
      public function del($Id){

        $sql='DELETE FROM `artcles` WHERE `artcles`.`Id` ='.$this->db->escape($Id).';';
        $this->db->query($sql);
       $Affected_Rows=$this->db->affected_rows();
        return $Affected_Rows;  
        
        
      }



      public function NumRows(){
$Id=$this->session->userdata('Id');        
  $num=$this->db->select('*')
                -> from('artcles')
                ->where(['UserId'=>$Id])
                ->get();

return $num->num_rows();

}
public function FindArt($Sno){
$sql='SELECT `Id`, `Title`, `ArticleBody` FROM `artcles` WHERE `artcles`.`Id` ='.$this->db->escape($Sno).';';

$DataReq=$this->db->query($sql);
return $DataReq->row();
       
}

 public function UpdateArticle($ArticleId,$ArticleTitle,$ArticleBody){
$sql="UPDATE `artcles` SET `Title` = ".$this->db->escape($ArticleTitle).", `ArticleBody` = ".$this->db->escape($ArticleBody)." WHERE `artcles`.`Id` =".$this->db->escape($ArticleId).";";
$this->db->query($sql);
$Affected_Rows=$this->db->affected_rows();
return $Affected_Rows;  



} 
}

?>
