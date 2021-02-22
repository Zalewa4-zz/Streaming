<?php
include('connect.php');
require("header.php");
require 'alerts.php';
    if ((!empty($_SESSION['login'])) AND (!empty($_SESSION['password']))) {
        alert("Błąd sesji!", "Jesteś zalogowany!", "error", "Streaming Zalewki", "loggeduser/index.php");
    }else{
        
    require 'navbar.php';
?>





    <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.4);">
        <h1>Witamy na naszej stronie!</h1>
        <p class="lead">Możesz tutaj pooglądać najpopularniejsze serialie oraz filmy w sieci. Ponadto oferujemy też słuchanie najnowszych hitów muzycznych! </p>
        <p><a href = "register.php" ><button type="submit" class="btn float-right login_btn" style="">Dołącz do nas!</button></a></p>
    </div>
    
    
    
<?php
 echo '<h2 class="text-center">Sekcja filmów</h2>';
 echo '<hr style="background-color: black">';
 $movies = $db->query('SELECT * FROM movies ORDER BY id DESC')->FetchAll();
 echo '<div class="row">';
 foreach($movies as $row){
     $id = $row['id'];
     $title = $row['title'];
     $minsrc = $row['minsrc'];
     echo '<div class="col-md-6 col-lg-4 col-xl-3">';
     echo "<h2> $title </h2>";
     echo "<p><img src='$minsrc' alt='...' class='img-thumbnail'></p>";
     echo'<p><a href = "register.php" ><button type="submit" class="btn float-right login_btn" style="">🔒</button></a></p></div>';
	
 }
 echo '</div>';
 $music = $db->query('SELECT * FROM music ORDER BY id DESC')->FetchAll();

	echo '<h2 class="text-center">Sekcja muzyki</h2>';
	echo '<hr style="background-color: black">';
	 echo '<div class="row">';
 foreach($music as $row){
     $id = $row['id'];
     $title = $row['title'];
     $mus = $row['mus'];
     echo '<div class="col-md-6 col-lg-4 col-xl-3">';
     echo "<h2> $title </h2>";
     echo'<p><a href = "register.php" ><button type="submit" class="btn float-right login_btn" style="">🔒</button></a></p></div>';
    
 }
 echo '</div>';
?>
</div>
<div class="container pt-5">

</div>


<?php
 
require("footer.php");
 }
?>

