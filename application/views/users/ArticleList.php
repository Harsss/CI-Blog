<?php 
include('Header.php'); 
?>

<div class="container">
    <h1>Let's Read Theese Beautiful Articles </h1>
    <div class="table">
    <table>
    <thread>
    <tr>
    <th> Serial No.   </th>
    <th>   ATICLE TITLE </th>
    <th>   ATICLE  Body </th>
    <th>   Article Writer </th>
    </thread>
    <tbody>
         
    <?php if(count($Articles)) :?> 
        <?php $count=0;?>
        <?php foreach ($Articles as $art ) { ?>
    <tr>
  
    <td>  <?php echo ++$count;   ?> </td>
    <td>  <?php echo $art->Title;   ?> </td>
    <td>  <?php echo $art->ArticleBody;   ?> </td>
    <td>  <?php echo $art->Username;   ?> </td>
    
    </tr>
    <?php }?>
    
    <?php else :?>
          <tr>
        <td colspan="3"> No data </td>
        </tr>
    <?php endif?>
       </tbody>
     


 
  
    </table>
    </div>
    </div>
<?php 
include('Footer.php'); 
?>