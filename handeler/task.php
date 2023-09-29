<?php
include "../core/function.php";
include "../core/valdate.php";
if(session_status()===PHP_SESSION_NONE)session_start();
//header('location:../strfolder/profile.php');
$errors2=[];
$user=json_decode(file_get_contents('../handeler/form.json'),true);//جايه من halnderrgister
    
if(checkRequestMethod("POST")){
   
   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
 // $_POST['user-id']=$_SESSION['newid'];
  //$_POST['user-id']=$user['id']; /////no work
 
   }
   if(reqinput($id)){
    $errors2[]="id require";
    }   
   else if(reqinput($task)){
   $errors2[]="task require";
   }
   
  
  
   
   
   
    if (empty($errors2)){
        $listtask=json_decode(file_get_contents('user.json'),true);
     
        $newtask=['id'=>$id,'task'=>$task,'user-id'=>$_SESSION['newid']];
        $listtask []=$newtask;
        file_put_contents('user.json',json_encode($listtask) );
   
        header('location:../strfolder/profile.php');
        exit;
        
    }
  else{  $_SESSION['errors2']=$errors2;
   header('location:../strfolder/task.php');
exit;
    }
}else{
    header('location:../strfolder/task.php');
}
;
?>