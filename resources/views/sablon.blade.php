
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">MENÜ</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
 
  <aside id="sidebar" class="sidebar">
  
          <a href="#">
          <i class="bi bi-grid"></i>
          <span>ANA SAYFA</span>
          </a>

                        
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-grid"></i>
        <span>KATEGORİLER</span>
      </a>
    </li>
    <li class="nav-item" id="kategori-ekle-item" style="display: none;">
      <a href="{{ route('kategoriDuzenle') }}" class="nav-link">
        <span>Kategori Ekle</span>
      </a>
    </li>
    <li class="nav-item" id="kategori-listesi-item" style="display: none;">
      <a href="{{ route('kategoriListe') }}" class="nav-link">
        <span>Kategori Listesi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-grid"></i>
        <span>MENÜLER</span>
      </a>
    </li>
    <li class="nav-item" id="menu-ekle-item" style="display: none;">
      <a href="{{route('menuEkle')}}" class="nav-link">
        <span>Menü Ekle</span>
      </a>
    </li>
    <li class="nav-item" id="menu-listesi-item" style="display: none;">
      <a href="{{route('menuListe')}}" class="nav-link">
        <span>Menü Listesi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="login">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Oturum Aç</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="register">
        <i class="bi bi-card-list"></i>
        <span>Kayıt Ol</span>
      </a>
    </li>
    
    <li class="nav-item">
    <a class="nav-link" href="/" onclick="confirmLogout()">
        <i class="bi bi-box-arrow-left"></i>
        <span>Çıkış Yap</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>

<script>
    function confirmLogout() {
        if (confirm("Çıkış yapmak istediğinizden emin misiniz?")) {
            document.getElementById('logout-form').submit();
        }
    }
</script>

 
  </ul>
  
  </aside>
  

  <main id="main" class="main">

    @yield('content')
      
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script>
    const anasayfaLink = document.querySelector('.sidebar-nav .nav-item:nth-child(4) .nav-link');
    anasayfaLink.addEventListener('click', function (event) {
    event.preventDefault();
  });
  // KATEGORİLER bağlantısına tıklandığında Kategori Ekle ve Kategori Listesi bağlantılarını göster/gizle
  const kategorilerLink = document.querySelector('.sidebar-nav .nav-item:nth-child(1) .nav-link');
  const kategoriEkleItem = document.getElementById('kategori-ekle-item');
  const kategoriListesiItem = document.getElementById('kategori-listesi-item');

  kategorilerLink.addEventListener('click', function (event) {
    event.preventDefault();
    kategoriEkleItem.style.display = kategoriEkleItem.style.display === 'none' ? 'block' : 'none';
    kategoriListesiItem.style.display = kategoriListesiItem.style.display === 'none' ? 'block' : 'none';
  });

  // MENÜLER bağlantısına tıklandığında Menü Ekle ve Menü Listesi bağlantılarını göster/gizle
  const menuLink = document.querySelector('.sidebar-nav .nav-item:nth-child(4) .nav-link');
  const menuEkleItem = document.getElementById('menu-ekle-item');
  const menuListesiItem = document.getElementById('menu-listesi-item');

  menuLink.addEventListener('click', function (event) {
    event.preventDefault();
    menuEkleItem.style.display = menuEkleItem.style.display === 'none' ? 'block' : 'none';
    menuListesiItem.style.display = menuListesiItem.style.display === 'none' ? 'block' : 'none';
  });
</script>


  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
  