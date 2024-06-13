<?php
include('admin\conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content='IE-edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container shadow" id="centre">
        <div class="container"><font face="Centaur">My shop</face></div>
        <div class="container">
  <div class="row mymanu">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-2" style="background-color: black; color: white;">
      <h1 class="text-center">Brands</h1><br>
      <a href="dell.php" class="text-link"><p class="text-center">Dell</p></a><br>
      <a href="hp.php" class="text-link"><p class="text-center">HP</p></a><br>
      <a href="samsung.php" class="text-link"><p class="text-center">Samsung</p></a><br>
      <a href="canon.php" class="text-link"><p class="text-center">Canon</p></a><br>
      <h1 class="text-center">Category</h1><br>
      <a href="laptop.php" class="text-link"><p class="text-center">Laptop</p></a><br>
      <a href="mobile.php" class="text-link"><p class="text-center">Mobile</p></a><br>
      <a href="camera.php" class="text-link"><p class="text-center">Camera</p></a><br>
      <a href="tv.php" class="text-link"><p class="text-center">Television</p></a><br>
    </div>
    <div class="col-sm-10"><br>
    <?php
    $b = 'samsung';
$q = "SELECT * FROM `product` WHERE `brand` = '".$b."'";
$run = mysqli_query($link, $q);
$i = 0;
echo '<div class="container">'; // Open the container for the grid
echo '<div class="row">'; // Open the first row

while ($row = mysqli_fetch_array($run)) {
    $name = $row['name'];
    $img = $row['img'];
    $brnd = $row['brand'];
    $id = $row['id'];
    $i++;
    
    // Output the column content
    echo '<div class="col-sm-4">';
    echo '<div class="card shadow h-100" width="200px">';
    echo '<center><img src="admin/c/' . $img . '" width="150px" height="150px"></center>';
    echo '<center><h3>'.$brnd.'</h3></center>';
    echo '<center><h3>' . $name . '</h3></center>';
    echo '<center><a href="b.php?id='.$id.'" class="btn btn-primary">Buy Now</a></center>';
    echo '</div>';
    echo '</div>';

    // Close the row after every third column
    if ($i % 3 == 0) {
        echo '</div><div class="row">';
    }
}

// Close any unclosed row and the container
if ($i % 3 != 0) {
    echo '</div>'; // Close the last row if it wasn't closed already
}
echo '</div>'; // Close the container
?>
    </div>
  </div>
</div>
<br><br>
<div class="container" id="footer" style="background-color:silver; color:white">
<h1 align="center">My project</h1></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>