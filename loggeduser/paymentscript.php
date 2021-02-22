<?php
require 'header.php';
    $login=$_SESSION['login'];
    $zaplata=$db->query('UPDATE users SET ispaid = ? WHERE login =?', 1, $login);
    alert("Dokonałeś wpłaty!", "Od teraz możesz oglądać filmy i seriale!", "success", "Streaming Zalewki", "payup.php");        
require('footer.php');

?>