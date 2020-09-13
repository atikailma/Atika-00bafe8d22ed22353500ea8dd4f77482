<?php

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(($_SESSION["email"])){
$name=$_SESSION["name"];
//dan jika terdaftar


}
else{

//jika tidak terdaftar, kembalikan user ke login.html
header( "Location: ../frontend/login.html" );
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"
      rel="stylesheet"
    />

    <link href="../frontend/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <nav>
      <div class="logo">
        <h4>Blogku</h4>
      </div>
      <ul id="nav-links" class="nav-links">
        <li>
          <form method="POST" action="logoutaction.php">
            <button type="submit" class="btn btn-primary">Logout</button>
          </form>
        </li>
      </ul>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </a>
    </nav>
    <div class="container" id="blog">
      <div class="row">
    
        <h1 class="hello">
          Hello, <em><?php echo $_SESSION['name'];?>!</em>
        </h1>
      </div>
    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("nav-links");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
  </body>
</html>