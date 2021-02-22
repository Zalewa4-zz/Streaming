<?php 
require 'header.php';

$oldemail = (substr(addslashes(htmlspecialchars($_POST['oldemail'])),0,32));
$newemail = (substr(addslashes(htmlspecialchars($_POST['newemail'])),0,32));
$password = md5(substr(addslashes(htmlspecialchars($_POST['password'])),0,32));

if (!$oldemail OR empty($oldemail)) {
    alert("Błąd zmiany adresu e-mail!", "Wypełnij pole z adresem E-mail!", "error", "Streaming Zalewki", "userpanel.php");
}
if (!$newemail OR empty($newemail)) {
    alert("Błąd zmiany adresu e-mail!", "Wypełnij pole z adresem E-mail!", "error", "Streaming Zalewki", "userpanel.php");
}
if (!$password OR empty($password)) {
    alert("Błąd zmiany adresu e-mail!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "userpanel.php");
}
    
if(filter_var($oldemail, FILTER_VALIDATE_EMAIL)==false || filter_var($newemail, FILTER_VALIDATE_EMAIL)==false){
    
    alert("Błąd zmiany adresu e-mail!", "E-mail powinien wyglądać następująco przykład@strona.com", "error", "Streaming Zalewki", "userpanel.php");

}
$data = $db->query('SELECT * FROM users WHERE email=?', $oldemail)->FetchArray();
        if($data['email']==$oldemail && $data['password']==$password){
          
            $update=$db->query('UPDATE users SET email = ? WHERE email = ?',$newemail, $oldemail);
            alert("Sukces!", "Użytkowniku Twój nowy e-mail to $newemail!", "success", "Streaming Zalewki", "userpanel.php");

        }

require 'footer.php';
?>

