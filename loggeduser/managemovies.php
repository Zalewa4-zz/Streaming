<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

?>



    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
  <h1 align="center">Zarządzaj filmami</h1>
      <form method='POST' action='addmovie.php'><input type='submit' value='Dodaj' class='btn login_btn float-right'><br /></form>
      <?php
      $dane = $db->query('SELECT * FROM movies')->fetchAll();
      echo '<table class="table table-striped table-dark"> <thead>';

	echo '<tr><th scope="col">ID</th><th scope="col">Tytuł</th><th scope="col">Ścieżka miniatury</th><th scope="col">Ścieżka filmu</th><th scope="col">Edytuj</th><th scope="col">Usuń</th></tr></thead><tbody>';
      foreach($dane as $row){
          $id = $row['id'];
        echo "<tr><td>" . $row["id"]. " </td><td>" . $row["title"]. " </td><td>" 
	. $row["minsrc"] . " </td><td>" . $row["vidsrc"]."</td><td><form method='POST' action='editmovie.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Edytuj' class='btn login_btn'></form></td>"
        . "</td><td><form method='POST' action='deletemovie.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Usuń' class='btn login_btn'></form></td></tr>";
      }

	echo '  </tbody>
</table>';
       echo '<a href = "adminpanel.php" ><button type="submit" class="btn float-right login_btn" style="">Powrót do panelu</button>'
	?>	
                
    </header>




  <!-- /.container -->


<?php
}
require '../footer.php';
?>
