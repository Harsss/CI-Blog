<?php 
include('Header.php'); 
?>
<div class="container row mx-5 my-4">
<a href="AddArt" class="btn btn-lg btn-primary">
Add articles
<?php
echo  form_hidden('UserId','$this->session->userdata("Id")');

?>
</a>
</div>
<?php
if($msg=$this->session->flashdata('msg')):
    $msg_class=$this->session->flashdata('msg_class'); ?>
<div class="row">
<div class="col-lg-6 mx-5 " >
<div class="alert <?php echo $msg_class; ?>">
<?php echo $msg;?>

</div>
</div>
</div>
<?php endif;?>





<?php 

 ?>
<div class="container">
    <h1>Hello you the wonderful writer..</h1>
    <div class="table">
    <table>
    <thread>
    <tr>
    <th> Serial No.   </th>
    <th>   ATICLE TITLE </th>
    <th>   ATICLE  Body </th>
    <th>   EDIT </th>
    <th>   DELETE </th>
    </thread>
    <tbody>
    <?php if(count($Articles)) :?> 
      <?php  $count=$this->uri->segment(3); ?>
        <?php foreach ($Articles as $art ) { ?>
    <tr>
  
    <td>  <?php echo ++$count;   ?> </td>
    <td>  <?php echo $art->Title;   ?> </td>
    <td>  <?php echo $art->ArticleBody;   ?> </td>
    <td><?=
        form_open('Writer/EditArticle'),
        form_hidden('Id',$art->Id),
        form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-primary']),
        form_close();



        ?>
      </td>
    <td>
    <?=
        form_open('Writer/DeleteArt'),
        form_hidden('Id',$art->Id),
        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
        form_close();



        ?>
    
    </td>
    
    </tr>
    <?php }?>
    
    <?php else :?>
          <tr>
        <td colspan="3"> No data </td>
        </tr>
    <?php endif?>
       </tbody>
     


 
   <?php echo $this->pagination->create_links();?>
    </table>
    </div>
    </div>
<?php 
include('Footer.php'); 
?>