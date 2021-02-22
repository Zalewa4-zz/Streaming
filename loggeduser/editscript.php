<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
//Stare dane
$firstid=$_POST['id'];
$stary = $db->query('SELECT * FROM users WHERE userid=?', $firstid)->FetchArray();
$starylogin=$stary['login'];
$starypassword=$stary['password'];
$staryemail=$stary['email'];
$staryislogged=$stary['islogged'];
$staryisadmin=$stary['isadmin'];
$staryispaid=$stary['ispaid'];
$staryisactivated=$stary['isactivated'];


if($_POST['elogin'] === "" OR empty($_POST['elogin'])){
    $sendlogin = $starylogin;
}else{
    $sendlogin = $_POST['elogin'];
}
if($_POST['epassword'] === "" OR empty($_POST['epassword'])){
    $sendpassword = $starypassword;
}else{
    $sendpassword = md5($_POST['epassword']);
}
if($_POST['eemail'] === "" OR empty($_POST['eemail'])){
    $sendemail = $staryemail;
}else{
    $sendemail = $_POST['eemail'];
}
if($_POST['eislogged'] === "" OR empty($_POST['eislogged'])){
    $sendislogged = $staryislogged;
}else{
    $sendislogged = $_POST['eislogged'];
}
if($_POST['eisadmin'] === "" OR empty($_POST['eisadmin'])){
    $sendisadmin = $staryisadmin;
}else{
    $sendisadmin = $_POST['eisadmin'];
}
if($_POST['eispaid'] === "" OR empty($_POST['eispaid'])){
    $sendispaid = $staryispaid;
}else{
    $sendispaid = $_POST['eispaid'];
}
if($_POST['eisactivated'] === "" OR empty($_POST['eisactivated'])){
    $sendisactivated = $staryisactivated;
}else{
    $sendisactivated = $_POST['eisactivated'];
}


$send = $db->query('UPDATE users SET  login=?, password=?, email=?, islogged=?, isadmin=?, ispaid=?, isactivated=? WHERE userid=?',  $sendlogin, $sendpassword, $sendemail, $sendislogged, $sendisadmin, $sendispaid, $sendactivated, $firstid) or die(alert("Błąd aktualizacji!", "Sprawdź czy istnieje takie ID, Login lub E-mail!", "error", "Streaming Zalewki", "adminpanel.php"));
alert("Aktualizacja danych udana!", "Dane użytkownika $starylogin zostały zaktualizowane!", "success", "Streaming Zalewki", "manageusers.php");



}
?>