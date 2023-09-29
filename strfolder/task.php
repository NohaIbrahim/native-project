<?php
include '../incfolder/header.php';
  
   include '../incfolder/nav.php';
  // include "../core/function.php";
   
//    if(checkRequestMethod("GET")){
//     header('location:../strfolder/rgister.php');
   
//    }
 //  else{
//    if( $_SERVER['REQUEST_METHOD']=='GET'){
//     header('location:../strfolder/rgister.php');
//    exit;
//     }
   
     if(session_status()===PHP_SESSION_NONE)session_start();
     $task=json_decode(file_get_contents('../handeler/form.json'),true);
     
     ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  my-5 ">
              <h2 class=" border p-2 my-2 text-center"> Register </h2>
                
              <?php   if(isset($_SESSION["errors2"])){?>
                    <div class="alert alert-danger">
                    <?php
                        foreach($_SESSION['errors2'] as $error)
                        echo $error; 
                           unset($_SESSION['errors2']);  ?>
                           </div>
                <?php         
              }
              ?>
               <form  action="../handeler/task.php" method="POST" class="border p-3" >
                <div class="form group p-2 my-1" >
                        <label for="id">id</label>
                        <input type='number' name="id" id="id" class="form-control">
                    </div>
                    <div class="form group p-2 my-1" >
                        <label for="name">task</label>
                        <input type="text" name="task" id="task" class="form-control">
                    </div>
                    
                    <!-- <div class="form group p-2 my-1">
                        <label for="user-id">user-id</label>
                        <input type="number" name="user-id"  id="user-id" class="form-control">
                    </div> -->
                    
                    <div class="form group p-2 my-1">
                        <input type="submit" value="all-tasks"  class="form-control ">
                    </div>

                </form>
            </div>
        </div>
    </div> 

        <?php include '../incfolder/footer.php';?>
                    
                        

