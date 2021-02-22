<?php 
include("connect.php");
require ("header.php");
require ("alerts.php");
$login = (substr(addslashes(htmlspecialchars($_POST['login'])),0,32));
$password = md5((substr(addslashes(htmlspecialchars($_POST['password'])),0,32)));

if (!$login OR empty($login)) { 
    alert("Błąd logowania!", "Wypełnij pole z loginem!", "error", "Streaming Zalewki", "login.php");
	}
if (!$password OR empty($password)) {
    alert("Błąd logowania!", "Wypełnij pole z hasłem!", "error", "Streaming Zalewki", "login.php");
	}
$data = $db->query('SELECT * FROM users WHERE login = ? OR email = ?', $login, $login)->fetchArray(); 
    if ($data['login'] != $login OR $data['password'] !=$password) {
		if ($data['email'] != $login OR $data['password'] !=$password){
			
		alert("Błąd logowania!", "Wprowadzono złe dane!", "error", "Streaming Zalewki", "login.php");
		
		
	}else {
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
						alert("Udane logowanie!", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/index.php");
						}else{
						alert("Udane logowanie! Udaj się na skrzynkę e-mail, aby aktywować konto.", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/activate.php");
						}
	}
	}else {
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
						alert("Udane logowanie!", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/index.php");
						}else{
						alert("Udane logowanie! Udaj się na skrzynkę e-mail, aby aktywować konto.", "Witaj $login!", "success", "Streaming Zalewki", "loggeduser/activate.php");
						}
	}

?>