<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{
	
$editid = $_POST['id'];
$edytowany = $db->query('SELECT * FROM music WHERE id=?', $editid)->FetchArray();
$edittitle = $edytowany['title'];


?>


                <div class="container">
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Edycja utworu <?php echo $edittitle; echo " (ID: $editid)"?> </h3>
			</div>
			<div class="card-body">
				<form method="POST" action="editmusicsc.php">
                                    <?php echo"<input type='hidden' name='id' readonly='readonly' value='$editid'>";?>

                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-music"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Tytuł" name="etitle">
                                        </div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-music"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Ścieżka utworu" name="emus">
					</div>
					<div class="form-group">
						<input type="submit" value="Aktualizuj" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="managemusic.php">Powrót do panelu zarządzania muzyką</a>
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
