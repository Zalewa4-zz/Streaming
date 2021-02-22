<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{


if(empty($_POST['alogin']) OR !isset($_POST['alogin'])){
    alert("Błąd dodawania nowego użytkownika!", "Wypełnij pole z Loginem!", "error", "Streaming Zalewki", "manageuesers.php");
}else{
    $sendlogin=$_POST['alogin'];
}
if(empty($_POST['apassword']) OR !isset($_POST['apassword'])){
    alert("Błąd dodawania nowego użytkownika!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "manageuesers.php");
}else{
    $sendpassword=$_POST['apassword'];
}
if(empty($_POST['aemail']) OR !isset($_POST['aemail'])){
    alert("Błąd dodawania nowego użytkownika!", "Wypełnij pole z adresem e-mail!", "error", "Streaming Zalewki", "manageuesers.php");
}else{
    $sendemail=$_POST['aemail'];
}
if(empty($_POST['aisadmin']) OR !isset($_POST['aisadmin'])){
    alert("Błąd dodawania nowego użytkownika!", "Wypełnij pole z wyborem grupy!", "error", "Streaming Zalewki", "manageuesers.php");
}else{
    $sendisadmin=$_POST['aisadmin'];
}
if(empty($_POST['aispaid']) OR !isset($_POST['aispaid'])){
    alert("Błąd dodawania nowego użytkownika!", "Wypełnij pole z płątnością!", "error", "Streaming Zalewki", "manageuesers.php");
}else{
    $sendispaid=$_POST['aispaid'];
}

if(filter_var($sendemail, FILTER_VALIDATE_EMAIL)==false){
    
    alert("Błąd Rejestracji!", "E-mail powinien wyglądać następująco przykład@strona.com", "error", "Streaming Zalewki", "manageuesers.php");

}
    if (preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $sendpassword)==false){
        alert("Błąd Rejestracji!", "Hasło powinno zawierać przynajmniej jedną dużą, jedną małą literę, jedną cyfre, jeden znak oraz powinno się składać z min. 8 znaków.", "error", "Streaming Zalewki", "add.php");
    }

$data = $db->query('SELECT * FROM users WHERE login = ? AND email = ?', $sendlogin, $sendemail)->fetchArray(); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($data!=null) {
        alert("Błąd Rejestracji!", "Istnieje użytkownik o podanych danych!", "error", "Streaming Zalewki", "manageusers.php");
    }else{
                
    $insert = $db->query('INSERT INTO users (login, password, email, isadmin, ispaid) VALUES (?,?,?,?,?)', $sendlogin, md5($sendpassword), $sendemail, $sendisadmin, $sendispaid) or die(alert("Błąd dodawania!", "Sprawdź czy istnieje użytkownik o takim loginie lub adresie e-mail!", "error", "Streaming Zalewki", "manageuesers.php"));
    alert("Sukces!", "Użytkownik $sendlogin został dodany!", "success", "Streaming Zalewki", "manageusers.php");

}
}

?>