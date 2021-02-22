<?php 
require 'header.php';

?>

    <!-- Jumbotron Header -->

    <header class="jumbotron my-5" style="background-color: rgba(0, 0, 0, 0.4); color:white">
        <h1 class="text-center">Witaj <?php echo $login ?>!</h1>
        <?php if($showstatus==0){  

        echo '<p>Nie opłaciłeś jeszcze swojego konta, możesz je opłcacić poniżej.</a></p>
	 <div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Wybierz formę płatności</h3>
			</div>
			<div class="card-body">
				
  <div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: "30.00"
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert("Transaction completed by " + details.payer.name.given_name);
		window.location.href="paymentscript.php";
      });
    }
  }).render("#paypal-button-container");
  //This function displays Smart Payment Buttons on your web page.
</script>
			</div>
		</div>

	</div>';
                
        }else {
         echo '<div class="d-flex justify-content-center h-20">
			<div class="card-header bg-dark">
				<h3>Konto opłacone</h3>
			</div>

	</div>';}
        ?>
                
    </header>


  </div>
  <!-- /.container -->


<?php
require '../footer.php';
?>
