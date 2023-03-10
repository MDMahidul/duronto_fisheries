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
<?php include "sections/header.php" ?>
  <section class="container mb-5">
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
          <div class='fish-details card mb-3'>
            <div class='row g-0'>
            
                <div class='col-md-5 align-self-center pe-2'>
                    <img src=".$row['p_img']." class='img-fluid' alt='".$row['p_name']."' >
                </div>
                <div class='col-md-7'>
                  <div class='card-body'>
                    <h3 class='card-title border-bottom bangla-font mb-3'>??????????????????????????? ??????????????? </h3>
                    <p class='card-text'>".$row['p_des_short']."</p>
                    <p class='card-text text-justify'>".$row['p_des_details']."</p>
                    <p class='card-text'><b>??????????????? ??????????????? </b>".$row['p_size']."</p>
                    <p class='card-text'><b>???????????? </b>".$row['p_price_per_kg']." ???????????? ??????????????? ??????.??????.</p>
                    <form action='order.php' method='post'>
                    <a class='btn primary-btn' type='submit' name='order' href = 'order.php?id=".$row['id']."'/>?????????????????? ????????????</a>
                    <input type='hidden' name='id' value='".$row['id']."'/>
                      <input type='hidden' name='id' value='".$row['id']."'/>
                    </form>
                  </div>
                </div>
              
            <div>
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
</html>