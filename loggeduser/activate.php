<?php 
require 'tempheader.php';
if($isactivated==1){
    alert("Twoje konto zostało już wcześniej aktywowane!", "Powrót do strony głównej.", "error", "Streaming Zalewki", "index.php");
}else{
?>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
        <h1>Witaj <?php echo $login ?> </h1>
        <p>Twój adres e-mail to <?php echo $showmail ?> </p>
        <p>'Twoje konto jest nieaktywowane!</p>
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Potwierdzenie rejestracji</h3>
				<h4>Podaj kod otrzymany na e-mail</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="activatescript.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Podaj kod" name="key">
                                        </div>
					<div class="form-group">
						<input type="submit" value="Zatwierdź" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>

                            

                
    </header>


  </div>
  <!-- /.container -->


<?php
}
require '../footer.php';
?>