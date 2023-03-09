<!-- db connection -->
<?php

include_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/ficon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css" rel="stylesheet" />
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>fish details</title>
</head>
<body>
<!-- navbar -->
<nav class=" navbar navbar-expand-lg fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/ficon.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
          <a class="nav-link"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <li><a class='dropdown-item' href='fishdes.php?id=".$row['id']."'>".$row['p_name']."</a></li>
                    <form action='#' method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'/>
                    </form>";
                }
            }else {
                echo "0 results";
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link disabled text-dark" href="#"><i class="fa-solid fa-phone me-2"></i>+8809611-600500</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <section class="container pt-5">
  <?php
        if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $sqld = "SELECT * FROM products WHERE id=$id";
          $resultd = mysqli_query($conn, $sqld);
          $row = mysqli_fetch_assoc($resultd);
      }
      if(isset($row)) {
        echo "
          <div class='text-center'>
          <h1 class='page-header'>".$row['p_name']."</h1>
          </div>
        ";
    }
            ?>
  </section>
    
    <?php include "sections/footer.php" ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 200, duration: 400, once:true });
    /* go to page top on page reload */
    if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
    } else {
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    }
  </script>
  </body>
</body>
</html>