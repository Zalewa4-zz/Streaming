<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
$editid = $_POST['id'];
$edytowany = $db->query('SELECT * FROM users WHERE userid=?', $editid)->FetchArray();
$editlogin = $edytowany['login'];



?>

                <div class="container">
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Edycja użytkownika <?php echo $editlogin; echo " (ID: $editid)"?> </h3>
			</div>
			<div class="card-body">
				<form method="POST" action="editscript.php">
                                    <?php echo"<input type='hidden' name='id' readonly='readonly' value='$editid'>";?>

                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Login" name="elogin">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Hasło" name="epassword">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="E-mail" name="eemail">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-signal"></i></span>
						</div>
                                            <input type="text" class="form-control" placeholder="Zalogowany" name="eislogged">
					</div>
                                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-cog"></i></span>
						</div>
                                    <input type="text" class="form-control" placeholder="Administrator" name="eisadmin">
                                    </div>
                                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
						</div>
                                    <input type="text" class="form-control" placeholder="Opłacony" name="eispaid">
                                    </div>
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock-open"></i></span>
						</div>
                                            <input type="text" class="form-control" placeholder="Aktywowany" name="eisactivated">
					</div>
					<div class="form-group">
						<input type="submit" value="Aktualizuj" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="manageusers.php">Powrót do panelu zarządzania użytkownikami</a>
				</div>
			</div>
		</div>
	</div>
</div>
                </div>

  <!-- /.container -->       


<?php
}
require '../footer.php';
?>
