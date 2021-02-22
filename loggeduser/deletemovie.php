
<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

$deleteid=$_POST['id'];
$datadata = $db->query('SELECT * FROM movies WHERE id=?', $deleteid)->FetchArray();
$deletedtitle=$datadata['title'];
$usuwanie= $db->query('DELETE FROM movies WHERE id=?', $deleteid);
alert("Sukces!", "Film $deletedtitle został usunięty!", "success", "Streaming Zalewki", "managemovies.php");
}
?>

