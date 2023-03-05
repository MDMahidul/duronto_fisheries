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
    <title>Shop</title>
</head>
<body>
    <?php include "sections/header.php" ?>

    <h1 class="text-center mt-5 pt-5 page-header">মাছ কিনুন</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='col'>
                                <div class='card products'>
                                    <img src=".$row['p_img']." class='card-img-top' alt='...' >
                                    <div class='card-body'>
                                        <h5 class='card-title fw-bold '>".$row['p_name']."</h5>
                                        <p class='card-text'><b>বিবরণঃ </b>".$row['p_des_short']."</p>
                                        <p class='card-text'><b>দামঃ </b>".$row['p_price_per_kg']." টাকা প্রতি কে.জি.</p>
                                        <form action='order.php' method='post'>
                                        <button class='btn primary-btn' type='submit' name='order' value='Order Now'/>অর্ডার করুন</button>
                                        <input type='hidden' name='id' value='".$row['id']."'/>
                                        </form>
                                    </div>
                                </div>
                            </div>";
                }
                    }else {
                        echo "0 results";
                    }
                    
                    mysqli_close($conn);
            ?>
        </div>
    
    
    <?php include "sections/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
  </body>
</body>
</html>
