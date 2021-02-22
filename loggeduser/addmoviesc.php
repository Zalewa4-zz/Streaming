<?php 
require 'header.php';

if(isset($_FILES['min'])){
      $errors= array();
      $file_name = $_FILES['min']['name'];
      $file_size =$_FILES['min']['size'];
      $file_tmp =$_FILES['min']['tmp_name'];
      $file_type=$_FILES['min']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['min']['name'])));
      
      $extensions= array("jpg", "png", "jpeg");
      
      if(in_array($file_ext,$extensions)=== false){
         alert("Błąd!", "Miniaturka powinna być w rozszerzeniu .jpg!", "error", "Streaming Zalewki", "addmovie.php");
      }
      
      //if($file_size > 2097152){
        // $errors[]='File size must be excately 2 MB';
      //}
      
      if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../min/".$file_name);
            $sendmin = "min/".$file_name;
      }else{
         alert("Błąd!", "Miniaturka powinna być w rozszerzeniu .jpg!", "error", "Streaming Zalewki", "addmovie.php");
      }
   }
   
            
    if(isset($_FILES['vid'])){
 $errors= array();
 $file_name = $_FILES['vid']['name'];
 $file_size =$_FILES['vid']['size'];
 $file_tmp =$_FILES['vid']['tmp_name'];
 $file_type=$_FILES['vid']['type'];
 $file_ext=strtolower(end(explode('.',$_FILES['vid']['name'])));

 $extensions= array("mp4");

 if(in_array($file_ext,$extensions)=== false){
    alert("Błąd!", "Video powinno być w formacie .mp4!", "error", "Streaming Zalewki", "addmovie.php");
 }

 //if($file_size > 2097152){
   // $errors[]='File size must be excately 2 MB';
 //}

 if(empty($errors)==true){
    move_uploaded_file($file_tmp,"../videos/".$file_name);
    $sendvid = "videos/".$file_name;
 }else{
    alert("Błąd!", "Video powinno być w formacie .mp4!", "error", "Streaming Zalewki", "addmovie.php");
 }
}




if($_POST['atitle'] === ""){
    $sendtitle = "unknown";
}else{
    $sendtitle = $_POST['atitle'];
}




$send = $db->query('INSERT INTO movies (title, minsrc, vidsrc) VALUES (?, ?, ?)',  $sendtitle, $sendmin, $sendvid) or die(alert("Błąd aktualizacji!", "Sprawdź czy istnieje takie ID, Login lub E-mail!", "error", "Streaming Zalewki", "adminpanel.php"));
alert("Aktualizacja danych udana!", "Film $sendtitle został dodany!", "success", "Streaming Zalewki", "managemovies.php");




?>