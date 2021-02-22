<?php 
require 'header.php';

$id = $_POST['id'];
$movie = $db->query('SELECT * FROM movies WHERE id=?', $id)->FetchArray();
$title = $movie['title'];
$vidsrc = $movie['vidsrc'];
$minsrc = $movie['minsrc'];

?>


    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
        <h1>Witaj <?php echo $login ?> </h1>
        <p>Tytuł filmu to <?php echo $title; ?> </p>
	 <video width="640" height="480" id="player" style="display: block; margin: 0 auto;" playsinline controls data-poster="/path/to/poster.jpg">
          <?php 
          echo "<source src='../$vidsrc' type='video/mp4'>"; 
          ?>
        </video> 
                
    </header>


  </div>
  <!-- /.container -->


<?php
require '../footer.php';
?>