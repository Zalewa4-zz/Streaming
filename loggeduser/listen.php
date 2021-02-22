<?php 
require 'header.php';

$id = $_POST['id'];
$music = $db->query('SELECT * FROM music WHERE id=?', $id)->FetchArray();
$title = $music['title'];
$mus = $music['mus'];

?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
        <h1>Witaj <?php echo $login ?> </h1>
        <p>Tytuł utworu to <?php echo $title; ?> </p>
	 <audio id="player" style="display: block; margin: 0 auto;" controls>
          <?php 
          echo "<source src='../$mus' type='video/mp4'>"; 
          ?>
        </video> 
                
    </header>


  </div>
  <!-- /.container -->


<?php
require '../footer.php';
?>