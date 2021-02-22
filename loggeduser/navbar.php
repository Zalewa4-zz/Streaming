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
        </button>
    </div>';
    if($isadmin==0){
        echo' <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">   
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
         echo $login;
      echo '</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="userpanel.php">Ustawienia</a>
          <a class="dropdown-item" href="?Logout">Wyloguj</a>
        </div>

      </li>
     </ul>
  </div>';
    }else if($isadmin==1){
     echo'
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item dropdown pull-left">
           
               
           
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
         echo $login;
     echo' </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="userpanel.php">Ustawienia</a>
          <a class="dropdown-item" href="adminpanel.php">Panel Admina</a>
          <a class="dropdown-item" href="?Logout">Wyloguj</a>
        </div>

      </li>
     </ul>
  </div>'; 
    
    }
   echo' </div>
</nav>';
   ?>