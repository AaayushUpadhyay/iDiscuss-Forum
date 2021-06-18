<?php
session_start();
  # code...

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand " href="#">iDiscuss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="iforum.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>';
    
   echo '<form class="d-flex" action="/forum/partials/search.php" method="get">
      <input class="form-control mr-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      </form>';
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {

    echo '
    <p class="text-light my-0 mx-4">Hi, '.$_SESSION['uname'].'</p>
    <a class="btn btn-outline-success ml-2 " href="/forum/partials/_logout.php">Logout</a>';
      }
    else{
    
    echo'<button class="btn btn-outline-success ml-2 " data-toggle="modal" data-target="#loginModal">Login</button>
    <button class="btn btn-outline-success mx-2 " data-toggle="modal" data-target="#signupModal">Signup</button>';}
    
  echo'</div>
</div>
</nav>';
   
    
    


include 'partials/_loginmodal.php';
include 'partials/_signupmodal.php';

if (isset($_GET['signupsuccess']) &&  $_GET['signupsuccess'] == "false") {
  # code...
  
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Error!  </strong> '.$_GET['Error'].'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
 
}
if (isset($_GET['signupsuccess']) &&  $_GET['signupsuccess'] == "true") {
  # code...
  
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success!  </strong> Account successfully created.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
 
}

?>