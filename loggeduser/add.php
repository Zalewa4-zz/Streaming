<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
?>

                <div class="container">
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Nowy użytkownik</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="addscript.php">
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Login" name="alogin">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Hasło" name="apassword">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="E-mail" name="aemail">
					</div>
                                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-cog"></i></span>
						</div>
                                    <input type="text" class="form-control" placeholder="Administrator" name="aisadmin">
                                    </div>
                                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
						</div>
                                    <input type="text" class="form-control" placeholder="Opłacony" name="aispaid">
                                    </div>
					<div class="form-group">
						<input type="submit" value="Dodaj" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="manageusers.php">Powrót do zarządzania użytkownikami</a>
				</div>
			</div>
		</div>
	</div>
</div>
                </div>

<?php
}
require '../footer.php';
?>
