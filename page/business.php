<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
   <!-- site metas -->
   <title>Achivon Business</title>
   <link rel="icon" href="../favicon.ico" type="image/x-icon">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <link rel="stylesheet" href="../css/custom.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   
      media="screen">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   <style>
    /* Efek Hover untuk Tombol */
 .custom-button {
      display: inline-block;
      padding: 0.8vw 2vw;
      background-color: #de650e;
      color: white;
      text-decoration: none;
      font-size: 1.2vw;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
   }

   .custom-button:hover {
      background-color: white; /* Warna berubah menjadi putih */
      color: #de650e; /* Teks berubah menjadi warna oranye */
      transform: scale(1.1); /* Tombol sedikit membesar */
      box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4); /* Tambahkan bayangan lebih besar */
   }


    
   </style>


</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <?php include '../page/header.php'; ?>

   <div class="image-center-section"
      style="display: flex; justify-content: center; align-items: center; padding-top: 5%;  ">
      <img src="../images/business/company-business.png" alt="Centered Image" style="max-width: 30%; height: auto; border-radius: 10px;">
   </div>
   <div class="image-center-section"
      style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">
      <img src="../images/business/COMPANY-BUSINESS1-01.png" alt="Centered Image" style="max-width: 100%; height: auto; border-radius: 10px;">
   </div>

   

   <div class="image-center-section"
      style="display: flex; justify-content: center; align-items: center; padding-top: 5%;  ">
      <img src="../images/business/COMPANY-BUSSINES2-01.png" alt="Centered Image" style="max-width: 50%; height: auto; border-radius: 10px;">
   </div>
   
<!--   <div class="image-center-section"-->
<!--      style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">-->
<!--      <a href="..\file\PT. Achivon Prestasi Abadi Company Profile.pdf" class="custom-button" download="PT_Achivon_Profile.pdf">-->
<!--    Download Company Profile Here-->
<!--</a>-->
<!--   </div>-->


<div class="image-center-section"
   style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">
   <img src="../images/business/IMAGE-BUSINESS-01.png" alt="Centered Image" style="max-width: 70%; height: auto; border-radius: 10px;">
</div>

<div class="image-center-section"
   style="display: flex; justify-content: left; align-items: center; padding-top: 8%;  padding-left: 35%;">
   <img src="../images/business/nib.png" alt="Centered Image" style="max-width: 7%; height: auto; border-radius: 10px;">
</div>

<div class="image-center-section"
   style="display: flex; justify-content: center; align-items: center;   ">
   <img src="../images/business/NIB-01.png" alt="Centered Image" style="max-width: 40%; height: auto; border-radius: 10px;">
</div>

<div class="image-center-section"
   style="display: flex; justify-content: left; align-items: center; padding-top: 8%;  padding-left: 15%;">
   <img src="../images/business/iujk.png" alt="Centered Image" style="max-width: 7%; height: auto; border-radius: 10px;">
</div>

<div class="image-center-section"
   style="display: flex; justify-content: center; align-items: center; padding-bottom: 8%;  ">
   <img src="../images/business/IUJK-01.png" alt="Centered Image" style="max-width: 70%; height: auto; border-radius: 10px;">
</div>




  










<?php include '../page/footer.php'; ?>

  
  
  
   
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../js/custom.js"></script>
   <script>
      $('a[href^="#"]').on('click', function (event) {

         var target = $(this.getAttribute('href'));

         if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
               scrollTop: target.offset().top
            }, 2000);
         }

      });
   </script>
   <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: { lat: 40.645037, lng: -73.880224 },
         });

         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
            position: { lat: 40.645037, lng: -73.880224 },
            map: map,
            icon: image
         });
      }
   </script>
   <!-- google map js -->
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
   <!-- end google map js -->
</body>

</html>