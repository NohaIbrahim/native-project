<?php
include '../incfolder/header.php';
  
   include '../incfolder/nav.php';
  //  include"../core/function.php";
   
  //  if(checkRequestMethod("GET")){
  //   header('location:rgister.php');
  //   exit;
  //  }
   if(session_status()===PHP_SESSION_NONE)session_start();
      $alltask=json_decode(file_get_contents('../handeler/user.json'),true);
      ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">task</th>
      <th scope="col">id-user</th>
      
       <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
   <?php $a=0;foreach($alltask as $key=>$val){
    if($alltask[$key]['user-id']==$_SESSION['newid']){$a++;
    ?>

<tr>
      <th scope="row"><?php echo $a?></th>
      <th scope="row"><?php echo $alltask[$key]['task']?></th>
      <td><?php  echo $alltask[$key]['user-id'] ;?></td>
      
      <td>
        
        
       
       
         <a href='../handeler/delete.php?id=<?=$a-1?>' class='btn btn-info'>delete</a>
        

      </td>
      <?php }?>
    </tr>
    <?php
   }

   ?>
    
  
    
  </tbody>
</table>
    

  <?php 
include '../incfolder/footer.php';
   ?>