<?php 
require 'tempheader.php';

$key = (substr(addslashes(htmlspecialchars($_POST['key'])),0,32));
$data = $db->query('SELECT * FROM users WHERE userid=?', $_SESSION['userid'])->FetchArray();
$login = md5($_SESSION['login']);
if($login==$key){
	$update=$db->query('UPDATE users SET isactivated = ? WHERE userid = ?', 1, $data['userid']);
	alert("Sukces!", "Użytkowniku aktywowałeś swoje konto!", "success", "Streaming Zalewki", "index.php");
}else{
	alert("Podałeś błędny kod!", "Udaj się na swoją skrzynkę pocztową w celu uzyskania kodu!", "error", "Streaming Zalewki", "activate.php");
}


require 'footer.php';
?>

