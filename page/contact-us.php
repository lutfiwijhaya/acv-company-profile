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
         display: flex;
         /* Flexbox untuk mengatur tata letak */
         justify-content: center;
         /* Gambar berada di tengah */
         align-items: center;
         /* Vertikal di tengah */
         gap: 2vw;
         /* Jarak antara gambar */
         padding-top: 5%;
         /* Jarak atas */

      }

      .project-link {
         display: inline-block;
         text-decoration: none;
         /* Hapus garis bawah jika ada */
      }

      .project-image {
         max-width: 100%;
         /* Responsif */
         height: auto;
         /* Proporsi gambar tetap */
         border-radius: 10px;
         /* Sudut melengkung */
         transition: transform 0.3s ease;
         /* Efek hover */
      }

      .project-image:hover {
         transform: scale(1.05);
         /* Efek zoom saat hover */
      }

      @media (max-width: 768px) {}

      .map-responsive iframe {
         width: 100%;
         height: 432px;
         /* Tinggi default untuk layar besar */
         /* border-radius: 10px; */
      }

      /* Media Query untuk layar kecil */
      @media (max-width: 768px) {
         .map-responsive iframe {
            height: 150px;
            /* Tinggi lebih kecil untuk layar kecil */
         }

         .scale-form {
            padding-left: 0% !important;
            padding-right: 0% !important;
         }
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



   <div class="scale-form" style="display: flex; justify-content: center; align-items: center; gap: 2vw; flex-wrap: wrap; padding-left: 15% ;flex-direction: row-reverse;
   padding-right: 15%; padding-top: 5%; padding-bottom: 5%;">
      <!-- Kolom Map -->
      <div class="col" style="max-width: 100%; flex: 1; text-align: center;">
         <div class="map-responsive">
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1514233914713!2d106.6191030129619!3d-6.223740435299657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff38188bcedf%3A0x7460c5ac90ac723e!2sPT.%20ACHIVON%20PRESTASI%20ABADI!5e0!3m2!1sid!2sid!4v1733924953294!5m2!1sid!2sid"
               width="100%" height="432" frameborder="0" style="border:0;" allowfullscreen>
            </iframe>
         </div>
      </div>

      <!-- Kolom Form -->
      <div class="col" style="max-width: 100%; flex: 1; text-align: center;">
         <div class="contact-form-container" style="padding: 2vw; background: #f8f9fa; border-radius: 10px;  text-align: left;">
            <h2 style="margin-bottom: 1.5vw; font-size: 1.8vw; color: #de650e; font-weight: bold;">PT Achivon Prestasi Abadi</h2>

            <form action="/submit-form" method="post" style="width: 100%;">
               <div style="margin-bottom: 1vw;">

                  <input type="text" id="name" name="name" placeholder="Enter your name" style="width: 100%; padding: 0.8vw; font-size: 1vw; border: 1px solid #ccc; border-radius: 5px;" required>
               </div>
               <div style="margin-bottom: 1vw;">

                  <input type="email" id="email" name="email" placeholder="Enter your email" style="width: 100%; padding: 0.8vw; font-size: 1vw; border: 1px solid #ccc; border-radius: 5px;" required>
               </div>
               <div style="margin-bottom: 1vw;">

                  <input type="text" id="phone" name="phone" placeholder="Enter your phone number" style="width: 100%; padding: 0.8vw; font-size: 1vw; border: 1px solid #ccc; border-radius: 5px;" required>
               </div>
               <div style="margin-bottom: 1.5vw;">

                  <textarea id="message" name="message" rows="5" placeholder="Enter your message" style="width: 100%; padding: 0.8vw; font-size: 1vw; border: 1px solid #ccc; border-radius: 5px;" required></textarea>
               </div>
               <button type="submit" style="padding: 0.8vw 2vw; background-color: #de650e; color: white; font-size: 1.2vw; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s;">
                  Submit
               </button>
            </form>
         </div>
      </div>
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
      $('a[href^="#"]').on('click', function(event) {

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
            center: {
               lat: 40.645037,
               lng: -73.880224
            },
         });

         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
            position: {
               lat: 40.645037,
               lng: -73.880224
            },
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