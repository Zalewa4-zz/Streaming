<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
	

$firstid=$_POST['id'];
$stary = $db->query('SELECT * FROM movies WHERE id=?', $firstid)->FetchArray();
$starytitle=$stary['title'];
$starymin=$stary['minsrc'];
$staryvid=$stary['vidsrc'];
if($_POST['etitle'] === "" OR empty($_POST['etitle'])){
    $sendtitle = $starytitle;
}else{
    $sendtitle = $_POST['etitle'];
}
if($_POST['eminsrc'] === "" OR empty($_POST['eminsrc'])){
    $sendmin = $starymin;
}else{
    $sendmin = $_POST['eminsrc'];
}
if($_POST['evidsrc'] === "" OR empty($_POST['evidsrc'])){
    $sendvid = $staryvid;
}else{
    $sendvid = $_POST['evidsrc'];
}
$send = $db->query('UPDATE movies SET  title=?, minsrc=?, vidsrc=? WHERE id=?',  $sendtitle, $sendmin, $sendvid, $firstid) or die(alert("Błąd aktualizacji!", "Sprawdź czy istnieje takie ID, Login lub E-mail!", "error", "Streaming Zalewki", "adminpanel.php"));
alert("Aktualizacja danych udana!", "Dane filmu $starytitle zostały zaktualizowane!", "success", "Streaming Zalewki", "managemovies.php");

}

?>