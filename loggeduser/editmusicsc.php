<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
	
//Stare dane
$firstid=$_POST['id'];
$stary = $db->query('SELECT * FROM music WHERE id=?', $firstid)->FetchArray();
$starytitle=$stary['title'];
$starymus=$stary['mus'];




if($_POST['etitle'] === "" OR empty($_POST['etitle'])){
    $sendtitle = $starytitle;
}else{
    $sendtitle = $_POST['etitle'];
}
if($_POST['emus'] === "" OR empty($_POST['emus'])){
    $sendmus = $starymus;
}else{
    $sendmus = $_POST['emus'];
}



$send = $db->query('UPDATE music SET title=?, mus=? WHERE id=?',  $sendtitle, $sendmus, $firstid) or die(alert("Błąd aktualizacji!", "Sprawdź poprawność danych!", "error", "Streaming Zalewki", "managemusic.php"));
alert("Aktualizacja danych udana!", "Dane utworu $starytitle zostały zaktualizowane!", "success", "Streaming Zalewki", "managemusic.php");



}
?>