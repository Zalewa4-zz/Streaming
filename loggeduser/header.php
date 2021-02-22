<?php
include("../connect.php");
require ("../alerts.php");

if ((empty($_SESSION['login'])) AND empty($_SESSION['password'])) {
    alert("Błąd uwierzytelnienia!", "Treść tylko dla zalogowanych użytkowników!", "error", "Streaming Zalewki", "../login.php");
}else{
    
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];
    $dane = $db->query('SELECT * FROM users WHERE login = ?', $login)->fetchArray();
    $showmail=$dane['email'];
    $showstatus=$dane['ispaid'];
    $isadmin=$dane['isadmin'];
	$isactivated=$dane['isactivated'];
}
$user = $db->query('SELECT * FROM users WHERE login = ? AND password = ? LIMIT 1', $login, $password)->fetchArray();
    if (empty($user['login']) OR !isset($user['password'])) {
    alert("Błąd uwierzytelnienia!", "Treść tylko dla zalogowanych użytkowników!", "error", "Streaming Zalewki", "../login.php");
}
if (isset($_GET['Logout'])){
            $takeid=$_SESSION['userid'];
            $_SESSION['islogged'] = 0;
            $logowanie = $db->query('UPDATE users SET islogged = 0 WHERE userid = ?', $takeid);
            session_destroy();
            alert("Sukces!", "Zostałeś wylogowany!", "success", "Streaming Zalewki", "../index.php");
}
if($isactivated==0){
	alert("Musisz potwierdzić konto, poprzez podanie kodu otrzymanego na adres e-mail!", "Zostałeś przekierowany!", "error", "Streaming Zalewki", "activate.php");
}
require ("navbar.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/login.css">
        <!--<link rel="stylesheet" href="../css/style.css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.11.7/dist/sweetalert2.all.min.js"></script>
		<script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
		<script src="https://www.paypal.com/sdk/js?client-id=AZW6ZQK4shLBbG6bkFPANNdIFQOBRnXM3XGUOJ_3YS1M7WXFMmftcR7k6WwK6qeDgjG4TpSWkYl6JqHD"></script>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v9.0&appId=245469750283336&autoLogAppEvents=1" nonce="A9V296oo"></script>
		
        
    </head>
    <body>
		<div class="container pt-5 pb-5">
