<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <title>SIPENJAKS by Joseph Damarseto</title>

    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo me-auto">
          <h1><a href="peta.php">RUKITJAKSEL</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#map">Menu</a></li>
            <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#about">Profil</a></li>
              </ul>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#infoModal"><i
                                class="fa-solid fa-circle-info"></i> Info</a>
                    </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
          <a href="https://instagram.com/josephdmrs?igshid=NzZlODBkYWE4Ng==" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/joseph-damarseto-ugm?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Selamat Datang</h1>
        <h2>Peta Persebaran Fasilitas Rumah Sakit Kota Administrasi Jakarta Selatan</h2>
        <a href="{{ route('index-public') }}" class="btn-get-started scrollto">Mulai</a>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= What We Do Section ======= -->
      <section id="what-we-do" class="what-we-do">
        <div class="container">

          <div class="section-title">
          <section id="map" class="map">
            <h2><a href="#map">Menu</h2>
            <p>Informasi persebaran fasilitas rumah sakit Kota Administrasi Jakarta Selatan</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="https://selatan.jakarta.go.id/">Web Resmi Jakarta Selatan</a></h4>
                <p>Profil Umum Kota Administrasi Jakarta Selatan</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="{{ route('index-public') }}">Peta Fasilitas Rumah Sakit</a></h4>
                <p>Peta Persebaran Fasilitas Rumah Sakit Kota Administrasi Jakarta Selatan</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="https://lewatmana.com/lokasi/fasilitas-kesehatan/rumah-sakit/di/jakarta-selatan/?page=1">Sumber Data</a></h4>
                <p>Sumber Data Rumah Sakit Jakarta Selatan</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End What We Do Section -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div class="col-lg-6">
              <img src="assets/img/jaksel.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <h3>RUKITJAKSEL?</h3>
              <p>
                Peta Web GIS Interaktif yang disusun oleh Joseph Damarseto. Menyajikan peta wilayah Kota Administrasi Jakarta Selatan yang diisi dengan
                informasi mengenai fasilitas rumah sakit yang tersebar di seluruh wilayah Kota Administrasi Jakarta Selatan.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Profil </li>
                <li><i class="bx bx-check-double"></i> Peta WebGIS</li>
                <li><i class="bx bx-check-double"></i> Sumber Data</li>
              </ul>

              <h3>PROFIL RUKITJAKSEL</h3>
              <p>
                Created by Joseph Damarseto - 22/502852/SV/21451 - Sistem Informasi Geografis - Departemen Teknologi Kebumian - Sekolah Vokasi - Universitas Gadjah Mada
              </p>

              <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="infoModalLabel"><i class="fa-solid fa-circle-info"></i> Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama: Joseph Damarseto</p>
                    <p>NIM: 22/502852/SV/21451</p>
                    <p>Kelas: B</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"
        integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    </script>
</body>
</html>
