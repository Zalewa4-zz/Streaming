<?php 
include("connect.php");
require 'header.php';
require ("alerts.php");

//przekazanie danych
$userid = 0;
$login = (substr(addslashes(htmlspecialchars($_POST['login'])),0,32));
$email = (substr(addslashes(htmlspecialchars($_POST['email'])),0,32));
$password = (substr(addslashes(htmlspecialchars($_POST['password'])),0,32));
$isadmin = 0;
$islogged = 0;
$ispaid = 0;
$isactivated = 0;

//sprawdzenie czy dane nie są puste
if (!$login OR empty($login)) {
    alert("Błąd Rejestracji!", "Wypełnij pole z loginem!", "error", "Streaming Zalewki", "register.php");
}
if (!$email OR empty($email)) {
    alert("Błąd Rejestracji!", "Wypełnij pole z adresem E-mail!", "error", "Streaming Zalewki", "register.php");
}
if (!$password OR empty($password)) {
    alert("Błąd Rejestracji!", "Wypełnij pole z adresem Hasłem!", "error", "Streaming Zalewki", "register.php");
}
 //poprawność adresu e-mail
if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
    
    alert("Błąd Rejestracji!", "E-mail powinien wyglądać następująco przykład@strona.com", "error", "Streaming Zalewki", "register.php");

}
//poprawnośc hasła
    if (preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password)==false){
        alert("Błąd Rejestracji!", "Hasło powinno zawierać przynajmniej jedną dużą, jedną małą literę, jedną cyfre, jeden znak oraz powinno się składać z min. 8 znaków.", "error", "Streaming Zalewki", "register.php");
    }
// sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
$data = $db->query('SELECT * FROM users WHERE login = ? OR email = ?', $login, $email)->fetchArray(); 
    if ($data!=null) {
        alert("Błąd Rejestracji!", "Istnieje użytkownik o podanych danych!", "error", "Streaming Zalewki", "register.php");
    }else{
	$key = md5($login);
	$message = "Witamy $login oto kod aktywacyjny do Strony Streaming Zalewki: $key";
	$mail_sent = @mail($email, "Aktywacja konta na Streaming Zalewki", $message);
	//echo $mail_sent ? "Mail sent" : "Mail failed";
    //Dodanie nowego użytkownika            
    $insert = $db->query('INSERT INTO users (login, password, email) VALUES (?,?,?)', $login, md5($password), $email) or die("Nie mogłem zakutalizować bazy!");
	alert("Sukces!", "Użytkownik $login został zarejestrowany! Możesz się teraz zalogować.", "success", "Streaming Zalewki", "login.php");
	//Wysłanie e-emaila z kodem
	}

require 'footer.php';
?>