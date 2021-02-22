<?php 
require 'header.php';
?>

    <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.4)">
        <h1>Witamy na naszej stronie!</h1>
        <?php if($showstatus==0){
        echo'<p><a href = "payup.php" ><button type="submit" class="btn float-right login_btn" style="">💵Zapłać💵</button></a></p>';
        }else{
           echo'<p>Możesz oglądać materiały</a></p>'; 
        }
        
        ?>
        </div>
		
<?php
 echo '<h2 class="text-center">Sekcja filmów i seriali</h2>';
 echo '<hr style="background-color: black">';
 $movies = $db->query('SELECT * FROM movies ORDER BY id DESC')->FetchAll();
 echo '<div class="row">';
 foreach($movies as $row){
     $id = $row['id'];
     $title = $row['title'];
     $minsrc = $row['minsrc'];
     echo '<div class="col-md-6 col-lg-4 col-xl-3">';
     echo "<h2> $title </h2>";
     echo "<p><img src='../$minsrc' alt='...' class='img-thumbnail'></p>";
    if($showstatus==0){
        echo'<p><a href = "payup.php" ><button type="submit" class="btn float-right login_btn" style="">💵</button></a></p></div>';

    }else{
        echo"<p><form method='POST' action='watch.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Oglądaj!' class='btn login_btn'></form></p></div>"; 
    }
 }

 $music = $db->query('SELECT * FROM music ORDER BY id DESC')->FetchAll();
    echo '</div>';
	echo '<h2 class="text-center">Sekcja muzyki</h2>';
	echo '<hr style="background-color: black">';
	 echo '<div class="row">';
 foreach($music as $row){
     $id = $row['id'];
     $title = $row['title'];
     $mus = $row['mus'];
     echo '<div class="col-md-6 col-lg-4 col-xl-3">';
     echo "<h2> $title </h2>";
    if($showstatus==0){
        echo'<p><a href = "payup.php" ><button type="submit" class="btn float-right login_btn" style="">💵</button></a></p></div>';

    }else{
        echo"<p><form method='POST' action='listen.php'><input type='hidden' name='id' readonly='readonly' value='$id'><input type='submit' value='Słuchaj!' class='btn login_btn'></form></p></div>"; 
    }
 }

    echo '</div>';
	
?>
</div>
<div class="container pt-5">

</div>
<?php
require '../footer.php';
?>