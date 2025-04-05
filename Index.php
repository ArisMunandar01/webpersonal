<!doctype html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RestoHill ArisMunandar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>

  <body style="height:3000px">

<!-- Header -->

<?php include "Header.php" ; ?>

<!-- End Header -->

<div class="container-lg">
  <div class="row">

<!-- Sidebaer -->

<?php include "Sidebaer.php" ; ?>

<!-- End Sidbar -->

<!-- Content -->

<?php 
if (isset($_GET['x']) && $_GET['x'] =='Home') {
  include "Home.php";
 } else if (isset($_GET['x']) && $_GET['x'] =='Order') {
  include "Order.php";
  } else if (isset($_GET['x']) && $_GET['x'] =='Product') {
    include "Product.php";
} else if (isset($_GET['x']) && $_GET['x'] =='Report') {
 include "Report.php";
}else if (isset($_GET['x']) && $_GET['x'] =='Customer') {
  include "Customer.php";
  }
?>

    <!-- End Content -->

  </div>
  <div class="fixed-bottom text-center mb-1 bg-primary text-white">
    RestoHill Aris Munandar 2030
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>