<!-- db connection -->
<?php

    include_once 'db.php';

?>

<?php include "sections/header.php" ?>
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
    <title>shop</title>
</head>
<body>
    <section class="container-fluid mb-5">
      <h1 class="text-center page-header">মাছ কিনুন</h1>
        <div class=" row row-cols-1 row-cols-md-3 g-4 padding-x" data-aos="slide-up">
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div class='col'>
                    <div class='card products'>
                    <div class='text-center'>
                    <img src=".$row['p_img']." class='card-img-top h-75' alt='...' >
                    </div>
                    <div class='card-body'>
                    <h5 class='card-title fw-bold '><a class='text-reset' href='fishdes.php?id=".$row['id']."'>".$row['p_name']."</a></h5>
                    <p class='card-text'><b>বিবরণঃ </b>".$row['p_des_short']."</p>
                    <p class='card-text'><b>মাছের আকারঃ </b>".$row['p_size']."</p>
                    <p class='card-text'><b>দামঃ </b>".$row['p_price_per_kg']." টাকা প্রতি কে.জি.</p>
                    <form action='order.php' method='post'>
                    <a class='btn primary-btn' type='submit' name='order' href = 'order.php?id=".$row['id']."'/>অর্ডার করুন</a>
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
</section>


<?php include "sections/footer.php" ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
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