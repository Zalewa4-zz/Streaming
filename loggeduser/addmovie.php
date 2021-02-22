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
				<h3>Nowy Film</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="addmoviesc.php" enctype="multipart/form-data">

                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-video"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Tytuł" name="atitle">
                                        </div>
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="min" id="min" required>
                                            <label class="custom-file-label" for="min">Wybierz miniaturkę</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                          </div>
                                    
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="vid" id="vid" required>
                                            <label class="custom-file-label" for="vid">Wybierz film</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                          </div>
					<div class="form-group">
						<input type="submit" value="Dodaj" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="managemovies.php">Powrót do zarządzania filmami</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php
require '../footer.php';
}
?>
