<?php
include"../core/function.php";
include"../core/valdate.php";
if(session_status()===PHP_SESSION_NONE)session_start();
//header('location:../strfolder/profile.php');
$errors=[];
if(checkRequestMethod("POST")&&checkisset('name')){

   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
   $new=$id;
   }
   if(reqinput($id)){
    $errors[]="id require";
    }   
   else if(reqinput($name)){
   $errors[]="name require";
   }
   else if(minreqinput($name,8)){
    $errors[]= 'min cha 8';

   }
   else if(maxreqinput($name,20)){
    $errors[]= 'max cha 20';

   }
   else if(reqinput($email)){
    $errors[]="email require";
    }   
   else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]='error email';
   }
   else if(reqinput($password)){
        $errors[]="password require";
        }
   
    if (empty($errors)){
        $user=json_decode(file_get_contents('form.json'),true);
     
        $newstudent=['id'=>$id,'name'=>$name,'email'=>$email,'password'=>$password];
        $user[]=$newstudent;
        file_put_contents('form.json',json_encode($user) );
        $_SESSION['newid']=$id;
   
        header('location:../strfolder/task.php');
        exit;
        
    }
  else{  $_SESSION['errors']=$errors;
   header('location:../strfolder/rgister.php');
exit;
    }
   
}
else header('location:../strfolder/rgister.php');