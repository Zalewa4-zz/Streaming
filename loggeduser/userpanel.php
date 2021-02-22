<?php 
require 'header.php';
?>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
        <h1>Witaj <?php echo $login ?> </h1>
        <p>Twój adres e-mail to <?php echo $showmail ?> </p>
        <p><?php if($showstatus==0){ echo 'Twoje konto jest nieopłacone <a href="payup.php">Zapłać!</a>';}else{echo 'Twoje konto jest opłacone';} ?> </p>
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Zmiana adresu E-mail</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="chemail.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="stary e-mail" name="oldemail">
                                        </div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="nowy e-mail" name="newemail">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="hasło" name="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Zatwierdź" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
            		<div class="card">
                            
			<div class="card-header">
                            
				<h3>Zmiana hasła</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="chpassword.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="stare hasło" name="oldpassword">
                                        </div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="nowe hasło" name="newpassword">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="powtórz hasło" name="repeat">
					</div>
					<div class="form-group">
						<input type="submit" value="Zatwierdź" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>

                
    </header>


  </div>
  <!-- /.container -->


<?php
require '../footer.php';
?>