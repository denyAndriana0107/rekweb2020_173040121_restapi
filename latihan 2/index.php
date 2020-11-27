<?php 
// taking data from JSON
$data = file_get_contents("data/pizza.json");

// array to JSON
$menu = json_decode($data,true);
$menu=$menu['menu'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pizza latihan 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="img/logo.png" alt="" width="120">
        </a>   
        <button class = "navbar-toggl er" type="button" data-toggle="coll apse" data-target="#EnavbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class = "navbar-toggler-icon"> </span>
        </button>
        <div class = "collapse navbar-collapse" id = "navbarNav"></div>
            <div class = "navbar-nav"
                <a class="nav-item nav-link active" href="#"> Home </a>
            </ div>
        </div>  
    </div>
  </nav>
  <div class="container">
    <div class="row mt-3">
        <div class-"col">
        <h1>All Menu</h1>
    </div>
    </div>
        <div class="row mt-3">
        <?php foreach ($menu as $m):?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="img/pizza/<?= $m['gambar'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $m['nama' ];?></h5>
                        <p class="card-text"> <?=$m['deskripsi'];?></p>
                        <h5 class="card-title"><?= $m['harga'];?></h5>
                        <a href="#" class="btn btn-primary" >Order</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>