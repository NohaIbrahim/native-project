<?php
include"../core/function.php";
include"../core/valdate.php";
if(session_status()===PHP_SESSION_NONE)session_start();



if( isset($_GET['id'])){
  $num=$_GET['id'];
  $listtask=json_decode(file_get_contents('user.json'),true);
     unset($listtask[$num]);
     $listtask=array_values($listtask);
     file_put_contents('user.json',json_encode($listtask) );
   
     header('location:../strfolder/profile.php');
    
   }
   