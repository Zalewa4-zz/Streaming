<?php 
require 'header.php';

$oldpassword = (substr(addslashes(htmlspecialchars($_POST['oldpassword'])),0,32));
$newpassword = (substr(addslashes(htmlspecialchars($_POST['newpassword'])),0,32));
$repeat = (substr(addslashes(htmlspecialchars($_POST['repeat'])),0,32));

if (!$oldpassword  OR empty($oldpassword)) {
    alert("Błąd zmiany adresu hasła!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "userpanel.php");
}
if (!$newpassword OR empty($newpassword)) {
    alert("Błąd zmiany adresu hasła!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "userpanel.php");
}
if (!$repeat OR empty($repeat)) {
    alert("Błąd zmiany adresu hasła!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "userpanel.php");
}
    if (preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $newpassword)==false){
        alert("Błąd Zmiany hasła!", "Hasło powinno zawierać przynajmniej jedną dużą, jedną małą literę, jedną cyfre, jeden znak oraz powinno się składać z min. 8 znaków.", "error", "Streaming Zalewki", "userpanel.php");
    }
    $pass = md5($oldpassword);
$data = $db->query('SELECT * FROM users WHERE password=?', $pass)->FetchArray();
        if($data['password']==$pass && $newpassword==$repeat){
          
            $update=$db->query('UPDATE users SET password = ? WHERE password = ?',md5($newpassword), md5($oldpassword));
            alert("Sukces!", "Użytkowniku .$data[login]. Twój hasło zostało zmienione. Możesz się teraz zalogować przy jego użyciu.", "success", "Streaming Zalewki", "../index.php");

        }

require 'footer.php';
?>


