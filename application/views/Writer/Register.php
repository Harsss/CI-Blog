<?php include("Header.php");?>

  <div class="container my-5">

<h1> Regisiter form </h1>
<?php echo form_open('Login/SendEmail');?>
<div class="form-group">
<label for="Email"> Email Id</label>;
<div class="row">
<?php    

$Array_Email=[
  'type'  =>  'email',
  'Name'  => 'Email',
  'class' => 'form-control mb-3',
  'id'  => 'Email',
  'aria-describedby' =>"emailHelp",

  'placeholder'=> "Enter your email",
  'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',

];
echo form_input($Array_Email);


?>

<?php
  echo "<div class='text-danger'>". form_error('Email'). "</div>";
 ?>
</div>
    

  <div class="form-group">

  

<label for="Password">Password</label>

<div class="row">
<?php    $Array_Password=[

'Name' =>  'Password',
  'type'  =>  'Password',
  'class' => 'form-control mb-3',
  'id'  => 'Password',
  'placeholder'=> "Enter your Password",
  'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',

];
echo form_input($Array_Password);


?>

<?php
  echo "<div class='text-danger'>". form_error('Password'). "</div>";
 ?>

</div>


<label for="Username">Username</label>
<div class="row">
<?php    $Array_Username=[
  'Name' =>  'Username',
   'type'  =>  'Text',
  'class' => 'form-control mb-3',
  'id'  => 'Username',
  'placeholder'=> "Enter your Username",
  'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',

];
echo form_input($Array_Username);


?>

<?php
  echo "<div class='text-danger'>". form_error('Username'). "</div>";
 ?>

</div>

<label for="Contact">Contact</label>
<div class="row">
<?php    $Array_Contact=[
  'Name'   =>'Contact',
    'type'  =>  'Number',
  'class' => 'form-control mb-3',
  'id'  => 'Contact',
  'placeholder'=> "Enter your Contact",
  'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',

];
echo form_input($Array_Contact);


?>

<?php
  echo "<div class='text-danger'>". form_error('Contact'). "</div>";
 ?>

</div>
<?php
$submit=[


'type'=>'submit',
'class'         => 'btn btn-primary mx-5 my-3 ',
'value'         => 'Submit',

];




echo form_submit($submit)   ;

$reset=array(


  'type'          =>'reset',
  'class'         => 'btn btn-primary mx-5 my-3',
  'value'         => 'Reset',
  
  );
  
  
  
  
  echo form_submit($reset)   ;
  

?>
    




</div>









<?php include("Footer.php");?>