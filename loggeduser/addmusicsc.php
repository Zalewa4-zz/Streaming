<?php 
require 'header.php';

if(isset($_FILES['mus'])){
      $errors= array();
      $file_name = $_FILES['mus']['name'];
      $file_size =$_FILES['mus']['size'];
      $file_tmp =$_FILES['mus']['tmp_name'];
      $file_type=$_FILES['mus']['type'];
	  $xd = explode('.',$file_name);
      $file_ext=strtolower(end($xd));
      
      $extensions= array("mp3", "wma", "m4a");
      
      if(in_array($file_ext,$extensions)=== false){
         alert("Błąd!", "Muzyka powinna być w rozszerzeniu .mp3!", "error", "Streaming Zalewki", "addmusic.php");
      }
      

      if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../music/".$file_name);
            $sendmus = "music/".$file_name;
      }else{
         alert("Błąd!", "Miniaturka powinna być w rozszerzeniu .jpg!", "error", "Streaming Zalewki", "addmovie.php");
      }
   }
  

if($_POST['atitle'] === ""){
    $sendtitle = "unknown";
}else{
    $sendtitle = $_POST['atitle'];
}




$send = $db->query('INSERT INTO music (title, mus) VALUES (?, ?)',  $sendtitle, $sendmus) or die(alert("Błąd aktualizacji!", "Sprawdź czy wprowadzone dane są poprawne.", "error", "Streaming Zalewki", "addmusic.php"));
alert("Aktualizacja danych udana!", "Utwór $sendtitle został dodany!", "success", "Streaming Zalewki", "managemusic.php");




?>