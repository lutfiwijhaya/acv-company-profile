 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 <style>
     /* ======= Header Styles ======= */
     .header {
         font-size: 1.1rem;
         font-family: "Roboto", sans-serif;
     }



     /* ======= Navigation Styles ======= */
     .navbar-nav {
         display: flex;
         justify-content: flex-end;
         /* Menyusun item ke kanan */
         align-items: center;
         /* Tengah vertikal */
         list-style: none;
         /* Hilangkan bullet point */

         font-size: 2vw;
         font-style: inherit;
         margin: 0;
     }

     .nav-item {
         margin-left: 15px;
         /* Jarak antar item */
     }

     .nav-link {
         text-decoration: none;
         /* Hilangkan garis bawah */
         color: #5c5c5c;
         /* Warna teks */
         padding: 5px 10px;
         /* Spasi dalam */
         transition: color 0.3s ease;
         /* Efek hover */
     }

     .nav-link:hover {
         color: #de650e;
         /* Warna saat hover */
     }

     /* Dropdown Styles */
     .nav-item .dropdown-menu {
         height: auto;
         background-color: rgba(235, 93, 21, 0.614) !important;
         /* Background transparan */
         border: none;
         /* Menghilangkan border */
         display: none;
         /* Menyembunyikan dropdown secara default */
         position: absolute;
         /* Posisi dropdown */
         z-index: 1000;
         /* Agar dropdown muncul di atas elemen lainnya */
     }

     .nav-item:hover .dropdown-menu {
         height: auto;
         display: block;
         /* Menampilkan dropdown ketika hover */
     }

     .nav-item .dropdown-toggle::after {
         height: auto;
         display: none;
         /* Menghilangkan tanda panah */
     }

     .nav-item .dropdown-menu .dropdown-item {
         height: auto;
         color: #ffffff;
         /* Warna teks item dropdown */
         padding: 10px 15px;
         /* Tambahkan padding untuk kenyamanan */
     }

     .nav-item .dropdown-menu .dropdown-item:hover {
         height: auto;
         color: #ffffff;
         /* Warna teks saat hover */
         background-color: rgb(252, 112, 19);
         /* Warna highlight */
     }

     /* ======= Language Toggle Styles ======= */
     .lang-toggle {
         font-weight: bold;
         border: none;
         background: transparent;
         color: #322e2d;
         font-size: 16px;
         cursor: pointer;
         padding: 0;
     }

     .lang-toggle:hover {
         text-decoration: underline;
     }

     .navigation ul li a {
         text-decoration: none;
         color: #5c5c5c;
         font-size: 1.5vw;
         padding: 5px 10px;
         white-space: nowrap;
         /* Mencegah teks terbungkus */
     }

     /* Default logo */
     .logo img {
         max-width: 100%;
         height: auto;
     }

     /* Logo kecil - disembunyikan secara default */
     .logo-small {
         display: none;
     }


     @media (max-width: 768px) {
         .navigation ul {
             flex-wrap: nowrap;
             /* Jangan biarkan elemen membungkus */


         }

         .navigation ul li {
             flex: 0 0 auto;
             /* Pertahankan lebar elemen agar tidak memanjang */

         }

         .logo {
             margin-top: 0px !important;

         }

         .logo img {
             display: none;
             /* Sembunyikan logo default */
         }

         .logo-small {
             display: block !important;
             /* Tampilkan logo kecil */
             max-width: 30% !important;
             height: auto;

         }

         .navigation ul li a {
             font-size: 0.6rem;

         }


     }
 </style>

 <header>
     <div class="header">
         <div class="container-fluid">
             <div class="row align-items-center">
                 <!-- Logo Section -->
                 <div class="col-6 col-md-3">
                     <div class="logo">
                         <a href="../index.php">
                             <!-- Logo default -->
                             <img src="../images/ACHIVON-LOGO-01.png" alt="Logo Default">
                             <!-- Logo kecil -->
                             <img src="../images/Logo2.png" alt="Logo Small" class="logo-small">
                         </a>
                     </div>
                 </div>
                 <!-- Navigation -->
                 <div class="col-6 col-md-9">
                     <nav class="navigation">
                         <ul class="navbar-nav d-flex justify-content-end align-items-center">
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button">
                                     Company
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="../index.php">President & CEO Message</a></li>
                                     <li><a class="dropdown-item" href="../page/philosophy.php">Company Philosophy</a></li>
                                     <li><a class="dropdown-item" href="../page/company-organization.php">Company Organization</a></li>
                                     <li>
                                         <a class="dropdown-item download-link"
                                             href="../file/PT. Achivon Prestasi Abadi Company Profile.pdf"
                                             download="PT. Achivon Prestasi Abadi Company Profile.pdf">
                                             <i class="fas fa-download"></i> - Download Company Profile
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../page/business.php">Business</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../page/project.php">Project</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../page/recruitment.php">Recruitment</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="../page/contact-us.php">Contact Us</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>



 <script>
    document.querySelectorAll('.download-link').forEach(link => {
    link.addEventListener('click', function (e) {
        // Nonaktifkan tautan dan tampilkan spinner
        this.style.pointerEvents = "none";
        const originalText = this.innerHTML;
        this.innerHTML = "<i class='fas fa-spinner fa-spin'></i> Processing...";

        // Set timeout untuk mengembalikan ke keadaan semula
        setTimeout(() => {
            this.style.pointerEvents = "auto"; // Aktifkan kembali tautan
            this.innerHTML = originalText;    // Kembalikan teks asli
        }, 5000); // Durasi diatur ke 5 detik (sesuaikan dengan kebutuhan Anda)
    });
});
 </script>