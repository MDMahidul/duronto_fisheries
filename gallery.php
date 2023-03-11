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
    <title>gallery</title>
</head>
<body>
  <!-- header section -->
    <?php include "sections/header.php" ?>
   
  <!-- photo gallery -->
    <section class="container-fluid" data-aos="slide-up">
      <h1 class="text-center page-header">ছবি গ্যালারি</h1>
      <div class="row row-cols-1 row-cols-md-4 g-2 padding-x image-container mb-5">
        <?php
              $sqlg = "SELECT * FROM photo_gallery";
              $resultg = mysqli_query($conn, $sqlg);

              if(mysqli_num_rows($resultg) > 0){
                  while($row = mysqli_fetch_assoc($resultg)){
                      echo "<div class='col'>
                              <div class='card'>
                                  <div class='text-center image'>
                                  <img src=".$row['src']." class='card-img-top w-90 ' alt='...' >
                                  </div>
                              </div>
                          </div>";
              }
                  }else {
                      echo "0 results";
                  }
          ?>
        <div class="popup-image">
            <span>&times;</span>
            <img src="" alt="">
        </div>
      </div>
   
    </section>
      

    <!-- footer section -->
    <?php include "sections/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
    <script type="text/javascript" src="app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 200, duration: 400, once:true });

    /* js for photo gallery */
    document.querySelectorAll('.image-container img').forEach(image=>{
      image.onclick = () =>{
        document.querySelector('.popup-image').style.display = 'block';
        document.querySelector('.popup-image img').src= image.getAttribute('src'); 
      }
    });
    document.querySelector('.popup-image').onclick= ()=>{
      document.querySelector('.popup-image').style.display = 'none';
    }
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