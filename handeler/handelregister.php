<?php
include"../core/function.php";
include"../core/valdate.php";
$errors=[];
if(checkRequestMethod("POST")&&checkisset('name')){

   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
   }
   if(!reqinput($name)){
   $errors[]='name require';
   }
   else if(!minreqinput($name,10)){
    $errors[]= 'min cha 10';

   }
   else if(!maxreqinput($name,10)){
    $errors[]= 'max cha 10';

   }
    if (!empty($errors))
   header('location:../strfolder/rgister.php');
exit;
   
}
else header('location:../strfolder/login.php');