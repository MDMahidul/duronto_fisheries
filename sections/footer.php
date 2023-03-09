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
    <title></title>
</head>
<body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  
    <!-- Section: Links  -->
    <section class="pt-2 mt-2">
      <div class="container-fluid text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-2">
            <!-- Content -->
            <h4 class="text-uppercase fw-bold mb-2 bangla-font">
            <img src="img/ficon.png" width="80px" alt="" class="mb-2">দুরন্ত ফিশারিজ
            </h4>
            <p class="bangla-font">
                ক্রেতার সন্তুষ্টি অর্জনই আমাদের একমাত্র লক্ষ্য। আপনাদের হাতে সেরা পণ্য টি তুলে দিতে আমাদের নিরালস চেষ্টা। সেরা পণ্য এবং সেরা সেবা পেতা আমাদের সাথেই থাকুন। 
            </p>
            <h5 class=" bangla-font fw-bold">সামাজিক যোগাযোগ মাধ্যম</h5>
            <div class="social-icons ">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2 footer-links">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-2 bangla-font-footer">
              আমাদের সেরা পণ্য সমূহ
            </h6>
            <?php
            $sql = "SELECT * FROM products LIMIT 4";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <p><a class='text-reset bangla-font footer-link' href='fishdes.php'>".$row['p_name']."</a></p>
                    <form action='order.php' method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'/>
                    </form>";
                }
            }else {
                echo "0 results";
            }
            ?>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2 footer-links">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-2 bangla-font-footer">
              প্রয়োজনীয় লিংক সমূহ
            </h6>
            <p>
              <a href="contact.php" class="text-reset  bangla-font ">ঠিকানা</a>
            </p>
            <p>
              <a href="#!" class="text-reset  bangla-font ">ব্লগ</a>
            </p>
            <p>
              <a href="shop.php" class="text-reset  bangla-font ">শপ</a>
            </p>
            <p>
              <a href="gallery.php" class="text-reset  bangla-font ">ছবি গ্যালারি</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-2 bangla-font-footer">Contact</h6>
            <?php
            $sql2 = "SELECT * FROM contact WHERE id=2";
            $result2 = mysqli_query($conn, $sql2);

            if(mysqli_num_rows($result2) > 0){
                while($row = mysqli_fetch_assoc($result2)){
                    echo "
                       <div>
                        <p class='address  bangla-font '><i class='fa-solid fa-house'></i>".$row['address']."</p>
                        <p class='address  bangla-font '><i class='fa-solid fa-envelope'></i>".$row['email']."</p>
                        <p class='address  bangla-font '><i class='fa-solid fa-mobile-screen-button'></i>".$row['phone']."</p>
                        <p class='address  bangla-font '><i class='fa-solid fa-phone'></i>".$row['phone_2']."</p>
                       </div>
                    ";
                  }
                }else {
                    echo "0 results";
                }
                
                mysqli_close($conn);
        ?>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4 bangla-font" style="background-color: rgba(0, 0, 0, 0.05);">
    Copyright © 2023 All Right Reserved
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
  </body>
</body>
</html>