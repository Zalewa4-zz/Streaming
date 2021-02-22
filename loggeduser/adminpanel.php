<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

?>


  <!-- Page Content -->
 <div class="d-flex justify-content-center">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
    <h1 align="center">Panel administratora </h1>
    <a href = "manageusers.php" ><button type="submit" class="btn float-left login_btn" style="">Użytkownicy</button></a>
    <a href = "managemovies.php" ><button type="submit" class="btn float-left login_btn" style="">Filmy</button></a>
    <a href = "managemusic.php" ><button type="submit" class="btn float-left login_btn" style="">Muzyka</button></a>
                
    </header>



 </div>
  <!-- /.container -->


<?php
}
require '../footer.php';
?>
