

<?php  
  include('Header.php')
 ?>

<div class="container"> <h1 class="my-4"> ADD Articles  </h1> 

<?php
echo form_open('Writer/ArticleValidation');

echo form_hidden('user_Id',$this->session->userdata('Id'));
?>

<div class="form-group my-3">
    <label for="Title">Article Title</label>
<div class='row'>
  <?php  $data = array(
        'name'          => 'Title',
        'id'            => 'Title',
        'class'         => 'form-control ml-3 mr-4',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%',
        'placeholder'   => 'Enter the Article Title',
        'value'         => set_value('Title' ),

);

echo form_input($data);  ?>

<?php
  echo "<div class='text-danger'>". form_error('Title'). "</div>";
 ?> </div>

  </div>
  <div class="form-group">
    <label for="Body">Article Body</label><div class="row">
    <?php  $data2 = array(
        'name'          => 'Body',
        'id'            => 'Body',
        'class'         => 'form-control ml-3 mr-4',
        'type'          => 'text',   
        'maxlength'     => '800',
        'size'          => '50',
        'style'         => 'width:50%',
        'placeholder'   => 'Enter Your Article ',
        'value'         => set_value("Body"),
                
);


echo form_textarea($data2);  ?>

<?php
 echo "<div class='text-danger'>". form_error('Body'). "</div>";
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

 </div>
<?php  
 include('Footer.php');
 ?>


