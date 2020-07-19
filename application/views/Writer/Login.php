

<?php  
  include('Header.php')
 ?>
<?php
if($UserAdd=$this->session->flashdata('UserAdd')):
  $UserAdd_Class=$this->session->flashdata('UserAdd_Class'); ?>
<div class="row">

<div class="alert <?php echo $UserAdd_Class; ?>">
<?php echo $UserAdd;?>


</div>
</div>
<?php endif;?>






<div class="container"> <h1 class="my-4"> ADMIN FORM </h1> 
<?php
if($msg=$this->session->flashdata('Login_failed')):?>
<div class="row">
<div class="col-lg-6 alert alert-danger">
<?php echo $msg;?>
</div>
</div>
<?php endif;?>


<?php
echo form_open('Login');?>
<div class="form-group my-3">
    <label for="UserName">UserName</label>
<div class='row'>
  <?php  $data = array(
        'name'          => 'UserName',
        'id'            => 'UserName',
        'class'         => 'form-control ml-3 mr-4',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',
        'placeholder'   => 'Enter the User Name',
        'value'         => set_value('UserName' ),

);

echo form_input($data);  ?>

<?php
  echo "<div class='text-danger'>". form_error('Username'). "</div>";
 ?> </div>

  </div>
  <div class="form-group">
    <label for="Password">Password</label><div class="row">
    <?php  $data = array(
        'name'          => 'Password',
        'id'            => 'Password',
        'class'         => 'form-control ml-3 mr-4',
        'type'          => 'password',   
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',
        'placeholder'   => 'Enter the Password ',
        'value'         => set_value("Password"),
                
);

echo form_password($data);  ?>

<?php
 echo "<div class='text-danger'>". form_error('Password'). "</div>";
 ?>


</div>

  </div> <?php  $data2 = array(
        'type'          => 'submit',
        'class'         => 'btn btn-primary mx-5',
        'value'         => 'Submit',
                
);

echo form_submit($data2);


  $reset = array(
    'type'          => 'reset',
    'class'         => 'btn btn-primary mx-3',
    'value'         => 'reset',
            
);

echo form_submit($reset);



?>

<?php   
echo anchor('Login/Register','<u> Sign up </u>','class="link-class"' );
?>
 </div>
<?php  
 include('Footer.php');
 ?>


