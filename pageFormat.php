<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body>
  	<?php
  	
    function pageHeader($title = "Dominik's",$img = "logo.png")
    {
       echo<<<EOT
        <div class="row">
          <img src="../images/$img"  style="height: 80px;>
          <h2 class="mt-2">$title</h2>
          <nav class="navbar ">
          <!-- Navbar content -->
              <a class="nav-item nav-link active" href="../index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="./pages/menu.php">Menu</a>
              <a class="nav-item nav-link" href="#">Orders</a>
               <a class="nav-item nav-link" href="#">Login</a>
                <a class="nav-item nav-link" href="#">Signup</a>
              <a class="nav-item nav-link disabled" href="#">More</a>
            </nav>
        </div>
        <hr class="style1"/>
EOT;
     }

     function pageFooter($img)
     {

       echo<<<EOT
        <div class="row">
          <img src=".//images//$img"  class="img-fluid" >
     
          <nav class="navbar ">
          <!-- Navbar content -->
              <a class="nav-item nav-link active" href="#">Career<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">adminLogin</a>
              <a class="nav-item nav-link" href="#">Ingredients</a>
            </nav>
        </div>
        <hr class="style1"/>
EOT;
    }

  	?>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

