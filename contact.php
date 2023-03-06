<?php include "sections/header.php" ?>
<!-- db connection -->
<?php

    include_once 'db.php';

?>

<!--toasts msg -->


<!-- Modal -->

<!-- Flexbox container for aligning the toasts -->

<!-- end -->

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
    <title>About us</title>
</head>
<body>
 
<section class="contact-section container mb-5">
    <h1 class="text-center my-5 pt-5 page-header">আমাদের সাথে যোগাযোগ করুন</h1>
    <div class="row">
    <div class="col-md-4 col-12 con-header contact mb-3">
      <h4 class="border-bottom page-subheader" id="con-header">অফিসে যোগাযোগের ঠিকানা</h4>
    <?php
            $sql = "SELECT * FROM contact WHERE id=1";
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
        ?>
    </div>
    <div class="col-md-4 col-12 con-header contact mb-3">
      <h4 class="border-bottom page-subheader" id="con-header">গুগোল ম্যাপে আমাদের ঠিকানা</h4>
      <div class="map-container">
        <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.20799912536305!2d90.41148944390626!3d23.771332124484033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75ee3158299%3A0xe7fb8d54825fe7bb!2sOSCL%20-%20Overseas%20Study%20Counseling%20Ltd.!5e0!3m2!1sen!2sbd!4v1677474754730!5m2!1sen!2sbd"></iframe>
      </div>
    </div>
    <div class="col-md-4 col-12 con-header contact mb-3">
      <h4 class="border-bottom page-subheader" id="con-header">আপনার পরিচয় দিন(ইংরেজীতে)</h4>
      <form method="post" action="action.php"  >
        <div class="form-group contact-form">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="lable-right">
                   <label for="formGroupExampleInput" class="form-label fw-bold">নামঃ</label>
                </td>
                <td>
                  <input type="text" class="form-input-field" id="formGroupExampleInput" placeholder="আপনার নাম লিখুন" name="c_name" required>
                </td>
              </tr>
              <tr>
                <td class="lable-right">
                   <label for="formGroupExampleInput" class="form-label fw-bold">ই-মেইলঃ</label>
                </td>
                <td>
                   <input type="email" class="form-input-field" id="formGroupExampleInput" placeholder="আপনার ই-মেইল লিখুন" name="c_mail" required>
                </td>
              </tr>
              <tr>
                <td class="lable-right">
                  <label for="formGroupExampleInput2" class="form-label fw-bold">মোবাইল নাম্বারঃ</label>
                <td>
                  <input type="text" class="form-input-field" id="formGroupExampleInput2" placeholder="আপনার মোবাইল নাম্বার লিখুন" name="c_phone" required pattern="[0-1]{2}[0-9]{9}">
                </td>
              </tr>
              <tr class="text-center">
                <td colspan="2">
                  <input type="submit" class="btn primary-btn" value="সেন্ড করুন" name="submit" id="submit-btn"></input>
                </td>
              </tr>
            </tbody>
          </table> 
        </div>
      </form>
    </div>
    </div>
</section>
<section class="container main-address mb-5">
  <div class="mt-5">
     <h5 class="page-subheader border-bottom ">দুরন্ত ফিশারিজের ঠিকানা</h5>
     <?php
            $sql2 = "SELECT * FROM contact WHERE id=2";
            $result2 = mysqli_query($conn, $sql2);

            if(mysqli_num_rows($result2) > 0){
                while($row = mysqli_fetch_assoc($result2)){
                    echo "
                       <div>
                        <p class='address'><i class='fa-solid fa-location-dot'></i>".$row['address']."</p>
                        <p class='address'><i class='fa-solid fa-envelope'></i>".$row['email']."</p>
                        <p class='address'><i class='fa-solid fa-mobile-screen-button'></i>".$row['phone']."</p>
                        <p class='address'><i class='fa-solid fa-phone'></i>".$row['phone_2']."</p>
                       </div>
                    ";
                  }
                }else {
                    echo "0 results";
                }
                
                mysqli_close($conn);
        ?>
  </div>
</section>
    
    
<?php include "sections/footer.php" ?>

<script>
  function myFun(e){
    e.preventDefault();
  }
</script>
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