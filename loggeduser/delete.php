<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

$deleteid=$_POST['id'];
$datadata = $db->query('SELECT * FROM users WHERE userid=?', $deleteid)->FetchArray();
$deletedlogin=$datadata['login'];
$usuwanie= $db->query('DELETE FROM users WHERE userid=?', $deleteid);
alert("Sukces!", "Użytkownik $deletedlogin został usunięty z listy użytkowników!", "success", "Streaming Zalewki", "adminpanel.php");
}
?>

