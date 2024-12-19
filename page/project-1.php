<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
   <!-- site metas -->
   <title>Achivon Project</title>
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
   

.image-center-section {
        display: flex; /* Flexbox untuk mengatur tata letak */
        justify-content: center; /* Gambar berada di tengah */
        align-items: center; /* Vertikal di tengah */
        gap: 2vw; /* Jarak antara gambar */
        padding-top: 5%; /* Jarak atas */
        
    }
    
    .project-link {
        display: inline-block;
        text-decoration: none; /* Hapus garis bawah jika ada */
    }
    
    .project-image {
        max-width: 100%; /* Responsif */
        height: auto; /* Proporsi gambar tetap */
        border-radius: 10px; /* Sudut melengkung */
        transition: transform 0.3s ease; /* Efek hover */
    }
    
    .project-image:hover {
        transform: scale(1.05); /* Efek zoom saat hover */
    }

    .content-layout-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2vw 10%;
    width: 100%;
}

/* Teks deskripsi di sebelah kiri */
.text-description {
    flex: 1;
    font-size: 1vw;
    color: #333;
    text-align: left;
    padding-right: 2vw;
}

/* Layout dua kolom untuk detail project */
.project-details {
    display: flex;
    justify-content: flex-start;
    margin-top: 1vw;
   
}

.details-left {
    flex: 1;
    font-weight: bold;
}

.details-right {
    flex: 1;
}


/* Gambar di sebelah kanan */
.image-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.responsive-image {
    max-width: 80%;
    height: auto;
    border-radius: 10px;
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
      <img src="../images/project/project-experience.png" alt="Centered Image" style="max-width: 30%; height: auto; border-radius: 10px;">
   </div>

   <div class="content-layout-section">
      <div class="image-container">
         <img src="../images/project/project-1/detail-project-1.png" alt="Project 2" class="responsive-image">
     </div>
     
      <div class="image-container">
          <img src="../images/project/project-1/FIRST-IMAGE-PROJECT-1-01.png" alt="Project 2" class="responsive-image">
      </div>
  </div>

  <div class="image-center-section"
   style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">
   <img src="../images/project/project-1/IMAGE-PROJECT-1-01.png" alt="Centered Image" style="max-width: 60%; height: auto; border-radius: 10px;">
</div>

<div class="image-center-section"
style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">
<img src="../images/project/project-1/IMAGE-PROJECT-1-02.png" alt="Centered Image" style="max-width: 60%; height: auto; border-radius: 10px;">
</div>
<div class="image-center-section"
style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; ">
<img src="../images/project/project-1/IMAGE-PROJECT-1-03.png" alt="Centered Image" style="max-width: 60%; height: auto; border-radius: 10px;">
</div>
<div class="image-center-section"
style="display: flex; justify-content: center; align-items: center;  padding-top: 5%; padding-bottom: 5%; ">
<img src="../images/project/project-1/IMAGE-PROJECT-1-04.png" alt="Centered Image" style="max-width: 60%; height: auto; border-radius: 10px;">
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