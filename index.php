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
    <title>home</title>
</head>
<body>
  <!-- header section -->
    <?php include "sections/header.php" ?>

    <!-- slider section -->
    <?php include "sections/slider.php" ?>

    <!-- our best product according to our customers -->
    <section class="container-fluid  best-sale margin-y" data-aos="slide-right">
      <div class="text-center">
        <h2 class="bangla-font mb-5">ক্রেতার চাহিদা অনুযায়ী আমাদের সেরা পণ্য সমূহ</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 padding-x">
        <?php
            $sqlp = "SELECT * FROM products LIMIT 4";
            $resultp = mysqli_query($conn, $sqlp);

            if(mysqli_num_rows($resultp) > 0){
                while($row = mysqli_fetch_assoc($resultp)){
                    echo "<div class='col'>
                            <div class='card products'>
                                <div class='text-center'>
                                
                                <a class='text-reset' href='fishdes.php?id=".$row['id']."'><img src=".$row['p_img']." class='card-img-top h-75' alt='...' ></a>
                                </div>
                                <div class='card-body'>
                                    <h5 class='card-title fw-bold '><a class='text-reset' href='fishdes.php?id=".$row['id']."'>".$row['p_name']."</a></h5>
                                    <form action='order.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."'/>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }
                }else {
                    echo "0 results";
                }
        ?>
        </div>
      </div>
    </section>

    <!-- buy fishes -->
    <section class="container-fluid  best-sale mt-5 margin-y" data-aos="slide-left">
      <div class="">
        <h2 class="bangla-font mb-5 text-center">আপনার পছন্দের মাছ কিনুন</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 padding-x">
        <?php
            $sqlb = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
            $resultb = mysqli_query($conn, $sqlb);

            if(mysqli_num_rows($resultb) > 0){
                while($row = mysqli_fetch_assoc($resultb)){
                    echo "<div class='col'>
                            <div class='card products'>
                                <div class='text-center'>
                                <img src=".$row['p_img']." class='card-img-top h-75' alt='...' >
                                </div>
                                <div class='card-body'>
                                   <h5 class='card-title fw-bold '><a class='text-reset' href='fishdes.php?id=".$row['id']."'>".$row['p_name']."</a></h5>
                                    <p class='card-text'><b>দামঃ </b>".$row['p_price_per_kg']." টাকা প্রতি কে.জি.</p>
                                    <p class='card-text'><b>মাছের আকারঃ </b>".$row['p_size']."</p>
                                    <form action='order.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."'/>
                                    <a class='btn primary-btn' type='submit' name='order' href = 'order.php?id=".$row['id']."'/>অর্ডার করুন</a>
                                    </form>
                                </div>
                            </div>
                        </div>";
            }
                }else {
                    echo "0 results";
                }
        ?>
        </div>
        <div class="text-center"><button class="btn primary-btn mt-5" onclick="location.href = 'shop.php';">আরো দেখুন</button></div>
      </div>
    </section>   
    
  <!-- photo gallery -->
    <section class="container-fluid  mt-5 margin-y" data-aos="slide-up">
      <h2 class="bangla-font mb-5 text-center">ছবির গ্যালারি</h2>
      <div class="row row-cols-1 row-cols-md-4 g-2 padding-x image-container mb-5">
        <?php
              $sqlg = "SELECT * FROM photo_gallery ORDER BY RAND() LIMIT 4";
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
      <div class="text-center"><button class="btn primary-btn mt-3" onclick="location.href = 'gallery.php';">আরো দেখুন</button></div>
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