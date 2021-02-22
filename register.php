<?php
include('connect.php');
require("header.php");
require 'alerts.php';

    if ((!empty($_SESSION['login'])) AND (!empty($_SESSION['password']))) {
        alert("Błąd sesji!", "Jesteś zalogowany!", "error", "Streaming Zalewki", "loggeduser/index.php");
    }else{
         require 'navbar.php';
		 
		 
	echo "<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{245469750283336}',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : '{v9.0}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };

 function createCookie(name, value, sec) {
  var expires;
  if (sec) {
    var date = new Date();
    date.setTime(date.getTime() + (sec * 1000));
    expires = '; expires=' + date.toGMTString();
  }
  else {
    expires = '';
  }
  document.cookie = escape(name) + '=' + escape(value) + expires + '; path=/';
}
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me/?fields=id,name,email',
      'GET',
      {}, function(response) {
	  console.log(response);
      console.log('Successful login for: ' + response.email + ' ' + response.name + ' ' + response.id);
	  
	  createCookie('xname', response.name, 10, '/; SameSite=None;');
	  createCookie('xemail', response.email, 10, '/; SameSite=None;');
	  createCookie('xid', response.id, 10, '/; SameSite=None;');
	  window.location.href='regfacebook.php';
    });


  }

   </script>";

?>




<div id="fb-root"></div>





                <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Zarejestruj się</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="regscript.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="login" name="login">
                                        </div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="e-mail" name="email">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="hasło" name="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Zarejestruj" class="btn float-right login_btn">
						
					</div>
					<div class="float-right fb-login-button pt-2" scope="public_profile,email" onlogin="checkLoginState();" data-width="" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>
					<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
					</fb:login-button>-->
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Masz już konto?<a href="login.php">Zaloguj się</a>
				</div>
			</div>
		</div>
	</div>
</div>
                </div>

  <!-- /.container -->            
<?php
    }
require("footer.php");
?>
