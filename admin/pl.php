<?php
include('conn.php');
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
    <link rel="stylesheet" href="css\style.css"/>
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
              <a class="nav-link active" aria-current="page" href="ahome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pro.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sell.php">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="container">
  <h1 align="center">Product List</h1>
  <table class="table table-bordered shadow" id="ptable">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Category</td>
        <td>Brand</td>
        <td>Price</td>
        <td>Image</td>
    </tr>
    <?php
    $q = "SELECT * FROM `product`";
    $run = mysqli_query($link,$q);
    while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $pname = $row['name'];
        $cat = $row['cat'];
        $img = $row['img'];
        $brand = $row['brand'];
        $price = $row['price'];
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$pname."</td>";
        echo "<td>".$cat."</td>";
        echo "<td>".$brand."</td>";
        echo "<td>₹".$price."</td>";
        echo '<td><img src=c/'.$img.' height="150px" width="150px"></td>';
        echo "</tr>";
    }
    ?>
  </table>
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