<?php 
include("connect.php");
require 'header.php';
require ("alerts.php");

//przekazanie danych
$userid = 0;
$login = $_COOKIE['xname'];
$email = $_COOKIE['xemail'];
$password = $_COOKIE['xid'];
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
 //poprawność adresu e-mail
if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
    
    alert("Błąd Rejestracji!", "E-mail powinien wyglądać następująco przykład@strona.com", "error", "Streaming Zalewki", "register.php");

}
$data = $db->query('SELECT * FROM users WHERE login = ? OR email = ?', $login, $email)->fetchArray(); 
$datax = $db->query('SELECT * FROM users WHERE login = ? AND password = ?', $login, md5($password))->fetchArray(); 
    if ($datax!=null) {
            $userid = $data['userid'];
            $login = $data['login'];
            $email = $data['email'];
            $password = $data['password'];
            $isadmin = $data['isadmin'];
            $islogged = $data['islogged'];
            $ispaid = $data['ispaid'];
			$isactivated = $data['isactivated'];
            

                        $_SESSION['userid'] = $userid;
						$_SESSION['login'] = $login;
						$_SESSION['password'] = $password;
                        $_SESSION['islogged'] = 1;
                        $_SESSION['isadmin'] = $isadmin;
                        $_SESSION['ispaid'] = $isadmin;
						$_SESSION['isactivated'] = $isactivated;
                        $logowanie=$db->query('UPDATE users SET islogged = 1 WHERE userid = ?', $userid);
						
						if($isactivated==1){
						alert("Posiadasz już konto, zostałeś automatycznie zalogowany!", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/index.php");
						}else{
						alert("Udane logowanie! Udaj się na skrzynkę e-mail, aby aktywować konto.", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/activate.php");
						}
	}
   else{
		
	$key = md5($login);
	$message = "Witamy $login . To twoje hasło $password , oto kod aktywacyjny do Strony Streaming Zalewki: $key";
	$mail_sent = @mail($email, "Aktywacja konta na Streaming Zalewki", $message);
	//echo $mail_sent ? "Mail sent" : "Mail failed";
    //Dodanie nowego użytkownika            
    $insert = $db->query('INSERT INTO users (login, password, email) VALUES (?,?,?)', $login, md5($password), $email) or die("Nie mogłem zakutalizować bazy!");
	alert("Sukces!", "Użytkownik $login został zarejestrowany! Możesz się teraz zalogować.", "success", "Streaming Zalewki", "login.php");
	//Wysłanie e-emaila z kodem
	}

require 'footer.php';
?>