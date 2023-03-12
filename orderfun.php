
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<?php

 if(isset($_POST['submit'])){
    //product info
    $Pname = $_POST['p_name'];
    $Psize = $_POST['p_size' ];
    $Pprice = $_POST['p_price_per_kg'];
    //customer info
    $name = $_POST['c_name'];
    $phone = $_POST['c_phone'];
    $BuyingKG = $_POST['buying_kg'];
    $Address = $_POST['c_address'];

    //mail send to our server
    $to = "islammoon0006@gmail.com";
    $subject = "Mail From website";
    $txt ="Name : ". $name . "\r\n Phone Number : " . $phone. "\r\n  Address : " . $Address. "\r\n  Product Name : " . $Pname. "\r\n  Product Size : " . $Psize. "\r\n  Price Per KG : " . $Pprice. "\r\n  Amount : " . $BuyingKG;
    $headers = "From: noreply@yoursite.com" . "\r\n";
    /* validation check */
    if($name != "" && $BuyingKG != "" && $phone != "" && $Address != "" && $Pname  != "" && $Psize != "" && $Pprice != ""){ 
      $sql3 = "INSERT INTO order_info values('','$name','$phone','$Address','$Pname','$Psize','$Pprice','$BuyingKG')";
      $data = mysqli_query($conn,$sql3);
      mail($to,$subject,$txt,$headers);
      if($data){?>

        <script>
           new swal({ title: "আপনার অর্ডার টি সম্পূর্ণ করার জন্য ধন্যবাদ!",
            text: "আমাদের প্রতিনিধি দ্রুত আপনার সাথে যোগাযোগ করবে",
            type: "success"}).then(okay => {
            if (okay) {
                window.location.href = "index.php";
            }
            });
        </script>
        <?php
        // header("Location:contact.php");
        }else
        echo "fail";
    }
}else{
    echo '<script>alert("সব গুলো ঘর পূরণ করুন")</script>';
}

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </body>
</body>
</html>

