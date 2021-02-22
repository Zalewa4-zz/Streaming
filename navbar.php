<?php

echo '<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Strona główna<span class="sr-only">Nowości</span></a>
      </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="index.php">Streaming Zalewki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>';

$check = $_SERVER['REQUEST_URI'];
if ($check == '/Streaming/login.php' || $check == '/Streaming/register.php'){
echo '</div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Konto (niezalogowany)
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Zaloguj</a>
          <a class="dropdown-item" href="register.php">Zarejestruj</a>
        </div>

      </li>
    
  </div>
        </ul>
    </div>
</nav>';  
}else{
    echo'</div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Konto(niezalogowany)
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Zaloguj</a>
          <a class="dropdown-item" href="register.php">Zarejestruj</a>
        </div>

      </li>
        <form method="POST" action="logscript.php">
            <ul class="navbar-nav">
                <li class="nav-item">
        <input type="text" placeholder="Login/E-mail" name="login" class="form-control">
                </li>
            <li class="nav-item">
        <input type="password" placeholder="Hasło" name="password" class="form-control">
        </li>
        <li class="nav-item">
        <button type="submit" class="btn float-right login_btn" style="">Login</button>
        </li>
        </ul>
        </form>

    </div>
</nav>';
}
?>