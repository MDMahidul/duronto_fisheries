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
    <title>Contact Page</title>
</head>
<body>
    <?php include "sections/header.php" ?>
 
    <section class="contact-section w-75 mx-auto">
       <h1 class="text-center my-5 pt-5 page-header">আমাদের সাথে যোগাযোগ করুন</h1>
       <div class="row">
        <div class="col-md-4 col-12 con-header contact">
          <h5 class="border-bottom page-subheader" id="con-header">যোগাযোগের ঠিকানা</h5>
        <?php
                $sql = "SELECT * FROM contact";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                          <div>
                            <p class='address'><i class='fa-solid fa-location-dot'></i> ".$row['address']."</p>
                            <p class='address'><i class='fa-solid fa-envelope'></i></i> ".$row['email']."</p>
                            <p class='address'><i class='fa-solid fa-mobile-screen-button'></i></i> ".$row['phone']."</p>
                            <p class='address'><i class='fa-solid fa-phone'></i></i></i> ".$row['phone_2']."</p>
                          </div>
                        ";
                      }
                    }else {
                        echo "0 results";
                    }
                    
                    mysqli_close($conn);
            ?>
        </div>
       </div>
    </section>
    
    
    <?php include "sections/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
  </body>
</body>
</html>