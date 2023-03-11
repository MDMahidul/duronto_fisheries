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
    <title>order</title>
</head>
<body>
<?php include "sections/header.php" ?>
<section class="container-fluid mb-5 order-section">
      <h1 class="text-center page-header" id="div2">আপনার অর্ডার টি সম্পূর্ণ করুন</h1>
      <?php
        if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $sqlo = "SELECT * FROM products WHERE id=$id";
          $resulto = mysqli_query($conn, $sqlo);
          $row = mysqli_fetch_assoc($resulto);
      }
      if(isset($row)) {
        echo "
        <form action='orderfun.php' method='post'>
          <div class='fish-details card mb-3'>
            <div class='row g-0'>
                <div class='col-md-5 align-self-center pe-2'>
                    <img src=".$row['p_img']." class='img-fluid' alt='".$row['p_name']."' >
                </div>
                <div class='col-md-7'>
                  <table class='table table-borderless'>
                    <tbody>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput' class='form-label fw-bold'>মাছের নামঃ</label>
                        </td>
                        <td>
                          <input type='text' class='form-input-field' id='formGroupExampleInput' name='p_name' required value='".$row['p_name']."'>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput' class='form-label fw-bold'>মাছের আকারঃ</label>
                        </td>
                        <td>
                          <input type='text' class='form-input-field' id='formGroupExampleInput' name='p_size' required value='".$row['p_size']."'>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput' class='form-label fw-bold'>প্রতি কেজি দামঃ </label>
                        </td>
                        <td>
                          <input type='text' class='form-input-field' id='formGroupExampleInput' name='p_price_per_kg' required value='".$row['p_price_per_kg']."'>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                        <label for='formGroupExampleInput' class='form-label fw-bold'>নামঃ</label>
                        </td>
                        <td>
                          <input type='text' class='form-input-field' id='formGroupExampleInput' placeholder='আপনার নাম লিখুন' name='c_name' required>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput2' class='form-label fw-bold '>মোবাইল নাম্বারঃ</label>
                        </td>
                        <td>
                        <input type='text' class='form-input-field' id='formGroupExampleInput2' placeholder='মোবাইল নাম্বার লিখুন' name='c_phone' required pattern='[0-1]{2}[0-9]{9}'>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput2' class='form-label fw-bold '>কেজিঃ </label>
                        </td>
                        <td>
                        <input type='number' class='form-input-field' id='formGroupExampleInput2' placeholder='কত কেজি কিনবেন' name='buying_kg' required>
                        </td>
                      </tr>
                      <tr>
                        <td class='lable-right'>
                          <label for='formGroupExampleInput2' class='form-label fw-bold '>ঠিকানাঃ </label>
                        </td>
                        <td>
                        <input type='text' class='form-input-field' id='formGroupExampleInput2' placeholder='আপনার ঠিকানা' name='c_address' required>
                        </td>
                      </tr>
                      <tr>
                        <td  class='lable-right'>
                          
                        </td>
                        <td>
                        <input class='btn primary-btn' type='submit' name='submit' value='সাবমিট করুন' /></input>
                        </td>
                      </tr>
                        <input type='hidden' name='id' value='".$row['id']."'/>
                    </tbody>
                  </table> 
                </div>
            </div>
          <div>
        </form>
        ";
    }
    ?>
          
</section>    
<!--  -->

<?php include "sections/footer.php" ?>

<script>
  function myFun(e){
    e.preventDefault();
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js" ></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
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