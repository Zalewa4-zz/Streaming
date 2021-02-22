
<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

$deleteid=$_POST['id'];
$datadata = $db->query('SELECT * FROM music WHERE id=?', $deleteid)->FetchArray();
$deletedtitle=$datadata['title'];
$usuwanie= $db->query('DELETE FROM music WHERE id=?', $deleteid);
alert("Sukces!", "Utwór $deletedtitle został usunięty!", "success", "Streaming Zalewki", "managemovies.php");
}
?>

