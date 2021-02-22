<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
?>

   <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
  <h1 align="center">Zarządzaj użytkownikami</h1>
      <form method='POST' action='add.php'><input type='submit' value='Dodaj' class='btn login_btn float-right'><br /></form>
      <?php
      $dane = $db->query('SELECT * FROM users')->fetchAll();
      echo '<table class="table-responsive table-striped table-dark"> <thead>';
      $zalogowany;
      $oplacony;
      $grupa;
	echo '<tr><th scope="col">ID</th><th scope="col">Login</th><th scope="col">Hasło</th><th scope="col">E-mail</th><th scope="col">On-line</th><th scope="col">Opłacony</th><th scope="col">Grupa</th><th scope="col">Aktywowany</th><th scope="col">Edytuj</th><th scope="col">Usuń</th></tr></thead><tbody>';
      foreach($dane as $row){
          if($row['islogged']==0){
              $zalogowany = "Nie";
          }else{
              $zalogowany = "Tak";
          }
          if($row['ispaid']==0){
              $oplacony = "Nie";
          }else{
              $oplacony = "Tak";
          }
          if($row['isadmin']==0){
              $grupa = "Użytkownik";
          }else{
              $grupa = "Administrator";
          }
         if($row['isactivated']==0){
			 $aktywowany = "Nie";
		 }else{
			 $aktywowany = "Tak";
		 }
          $id = $row['userid'];
        echo "<tr><td>" . $row["userid"]. " </td><td>" . $row["login"]. " </td><td>" 
	. $row["password"] . " </td><td>" . $row["email"]. " </td><td>" 
	. $zalogowany. "</td><td>" . $oplacony ."</td><td>" 
        . $grupa ."</td><td>" . $aktywowany . "</td><td><form method='POST' action='edit.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Edytuj' class='btn login_btn'></form></td>"
        . "</td><td><form method='POST' action='delete.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Usuń' class='btn login_btn'></form></td></tr>";
      }

	echo '  </tbody>
</table>';
       echo '<a href = "adminpanel.php" ><button type="submit" class="btn float-right login_btn" style="">Powrót do panelu</button>'
	?>	
        </header>        
    </div>


<?php
}
require '../footer.php';
?>
