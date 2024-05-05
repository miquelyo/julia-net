<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Net | Always Connected</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/julianet.ico') }}" type="image/x-icon"> <!-- Menambahkan favicon -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map-container { height: 400px; }
        #tentang-kami .row { margin-bottom: 20px; }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/julianet-logo.png') }}" alt="Logo" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link poppins-medium" href="#beranda">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link poppins-medium" href="#tentang-kami">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link poppins-medium" href="#layanan">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link poppins-medium" href="#keunggulan">KEUNGGULAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link poppins-medium" href="#kontak">CONTACT</a>
                </li>
                <button class="btn-login">Login</button>
            </ul>
        </div>
    </div>
</nav>



<section id="beranda" class="mb-5">
    <div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/wp/wp2.jpg" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/wp/wp2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/wp/wp2.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section id="three-columns" class="py-5">
    <div class="container">
        <div class="row align-items-stretch justify-content-center">
            <div class="col-lg-3" style="width: 28%">
                <div class="card border" style="height: 100%; padding: 5px; border-radius: 25px;">
                    <div class="card-body text-left">
                        <h3 class="mb-3" style="font-size: 30px; font-weight: bold; color: #206c44;">100+ Vendors</h3>
                        <p style="font-size: 14px;">Temukan Portofolio Distribusi dan Solusi kami yang terlengkap dan terluas</p>
                        <button type="button" class="btn btn-primary" style="background-color: #206c44; margin-top: 110px; border: none;">Find out more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" style="width: 28%">
                <div class="card border" style="height: 100%; padding: 5px; border-radius: 25px;">
                    <div class="card-body text-left">
                        <h3 class="mb-3" style="font-size: 30px; font-weight: bold; color: #206c44;">Jadilah Mitra</h3>
                        <p style="font-size: 14px;">Bisnis Kami</p>
                        <p style="font-size: 14px;">Kembangkan Bisnis Anda bersama Synnex Metrodata Indonesia</p>
                        <button type="button" class="btn btn-primary" style="background-color: #206c44; margin-top: 90px; border: none;">Find out more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" style="width: 28%">
                <div class="card border" style="height: 100%; padding: 5px; border-radius: 25px;">
                    <div class="card-body text-left">
                        <h3 class="mb-3" style="font-size: 30px; font-weight: bold; color: #206c44;">B2B Online</h3>
                        <form>
                            <div class="form-group">
                                <h2>Nama</h2>
                                <input type="text" class="form-control mb-2" placeholder="Nama Pengguna" style="font-size: 14px;">
                                <h2>Kata Sandi</h2>
                                <input type="password" class="form-control mb-2" placeholder="Kata Sandi" style="font-size: 14px;">
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe" style="font-size: 14px;">Remember Me?</label>
                                </div>
                                <button type="submit" class="btn btn-primary" style="font-size: 14px; background-color: #206c44; border: none;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="our-partners">
        <!-- Judul section -->
        <h2 style="margin-bottom: 20px;">Our Partners</h2> <!-- Tambahkan margin-bottom untuk memberikan ruang antara judul dan slider -->
        <div class="slick-slider">
            <!-- Isi slider dengan gambar-gambar -->
            <div><img src="../img/partner/kominfo.png" alt="Xiaomi"></div>
            <div><img src="../img/partner/kominfo.png" alt="Huawei"></div>
            <div><img src="../img/partner/kominfo.png" alt="Infinix"></div>
            <div><img src="../img/partner/kominfo.png" alt="Kominfo"></div>
            <div><img src="../img/partner/dana.jpg" alt="Dana"></div>
            <div><img src="../img/partner/kominfo.png" alt="BCA"></div>
            <!-- Tambahkan lebih banyak div jika Anda memiliki lebih banyak gambar -->
        </div>
    </section>

    <section id="kontak" class="mb-5">
    <div class="container px-4">
        <div class="max-w-screen-xl mt-24 mx-auto">
            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-8 rounded-lg shadow-lg items-center">
                <div class="md:flex md:flex-col md:justify-between md:items-start md:col-span-1">
                    <div>
                        <h2 class="lg:text-5xl font-bold leading-tight text-white md:text-left">Penuhi kebutuhan internet cepat di Indonesia bersama kami.</h2>
                    </div>
                </div>
                <div class="text-left md:col-span-1">
                    <div>
                        <input class="w-full mt-2 p-3 rounded-lg text-sm focus:outline-none focus:shadow-outline" type="text" placeholder="Nama">
                    </div>
                    <div class="mt-6">
                        <input class="w-full mt-2 p-3 rounded-lg text-sm focus:outline-none focus:shadow-outline" type="text" placeholder="Nama Perusahaan">
                    </div>
                    <div class="mt-6">
                        <input class="w-full mt-2 p-3 rounded-lg text-sm focus:outline-none focus:shadow-outline" type="text" placeholder="Alamat Email">
                    </div>
                    <div class="mt-6">
                        <textarea class="w-full h-24 mt-2 p-3 rounded-lg text-sm focus:outline-none focus:shadow-outline" placeholder="Pesan"></textarea>
                    </div>
                    <div class="mt-6">
                        <button class="uppercase text-xs lg:text-sm font-bold tracking-wide bg-green-jnet text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="jejak-kami" class="py-5">
    <div class="container p-5">
        <div class="row">
            <div>
                <h2 class="text-left title-with-short-underline" style="font-weight: bold; font-size: 40px; margin-bottom: 30px; color: #206c44;">Jejak Kami</h2>
            <div>
                <div>
                    <img src="../img/peta.jpg" alt="Peta Indonesia">
                </div>
        </div>
    </div>
</section>

<section id="kantor-pusat-cabang" class="py-5">
    <div class="container p-5">
        <div class="row">
            <div>
                <h2 class="text-left title-with-short-underline" style="font-weight: bold; font-size: 40px; margin-bottom: 30px; color: #206c44;">Kantor Pusat & Cabang</h2>
            </div>
            <div class="col-lg-6">
            <h2 class="mb-4" style="font-weight: bold; font-size: 40px; margin-bottom: 25px; color: #206c44;">
                <i class="fas fa-building mr-3"></i>Head Office
            </h2>
                <h4 class="office-title">JAKARTA OFFICE</h4>
                <p>SOHO Apartement Unit 2111,<br>
                    Central Park Jakarta.<br>
                    Jl. Letjen S. Parman Kav. 28<br>
                    Jakarta Barat 11470</p>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4" style="font-weight: bold; font-size: 40px; margin-bottom: 25px; color: #206c44;">
                <i class="fas fa-building mr-3"></i>Branches Office
            </h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="office-title">SOUTH SULAWESI OFFICE</h4>
                        <p>Jl. Mapala Raya Blok E23/26<br>
                            Kota Makassar,<br>
                            Sulawesi Selatan 90222</p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="office-title">CENTRAL SULAWESI OFFICE</h4>
                        <p>Jl. Raja Moili No.15 I,<br>
                            Palu, Lere, Palu Timur,<br>
                            Sulawesi Tengah, 94111<br>
                            (+62) 823 4789 9868</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="office-title">NORTH SULAWESI OFFICE</h4>
                        <p>Jl. Tonsawang No. 31 Ling. 2<br>
                            Kel. Karombasan Selatan,<br>
                            Kec. Wanea Kota Manado<br>
                            Sulawesi Utara 95117</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
      <div class="art">
        <div class="content">
          <section>
            <header>Company</header>
            <a href="#">About</a>
            <a href="#">Contact US</a>
            <a href="#">Team</a>
            <a href="#">Blog</a>
          </section>
          <section>
            <header>Development</header>
            <a href="#">Website</a>
            <a href="#">Mobile Application</a>
            <a href="#">UI & UX Design</a>
          </section>
          <section>
            <header>Weekly Newsletter</header>
            <form action="">
              <input type="email" placeholder="Your Email here" id="" />
              <input type="submit" value="Subscribe Now" />
            </form>
            <div class="social">
              <i class="fab fa-youtube"></i>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-telegram-plane"></i>
            </div>
          </section>
        </div>
        <div class="notice">
          Copyright &copy; 2024
          <strong>PT JULIA MULTIMEDIA NUSANTARA</strong>
        </div>
      </div>
    </footer>

<!-- BAGIAN SCRIPT DAN SWEET ALERT-->

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script>
    // Menampilkan SweetAlert saat tautan "Paket" diklik
    document.querySelector('a[href="paket"]').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tautan berpindah ke halaman "paket"

        // Menampilkan SweetAlert
        Swal.fire({
            title: 'Pilihan Paket Internet',
            html: `
        <section id="paket" class="mb-5">
          <p></p>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 m-15px-tb">
                <table class="table text-center table-bordered rounded-0">
                  <tbody>
                    <tr>
                      <td>Home 1</td>
                    </tr>
                    <tr>
                      <td><strong>Rp200.000/bulan</strong></td>
                    </tr>
                    <tr>
                      <td>30MBPS</td>
                    </tr>
                    <tr>
                      <td>Unlimited FUP</td>
                    </tr>
                    <tr>
                      <td>Support 24/7</td>
                    </tr>
                    <tr>
                      <td><button class="btn btn-primary">Beli</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-4 m-15px-tb">
                <table class="table text-center table-bordered rounded">
                  <tbody>
                    <tr>
                      <td>Home 2</td>
                    </tr>
                    <tr>
                      <td><strong>Rp300.000/bulan</strong></td>
                    </tr>
                    <tr>
                      <td>50MBPS</td>
                    </tr>
                    <tr>
                      <td>Unlimited FUP</td>
                    </tr>
                    <tr>
                      <td>Support 24/7</td>
                    </tr>
                    <tr>
                      <td><button class="btn btn-primary">Beli</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-4 m-15px-tb">
                <table class="table text-center table-bordered rounded">
                  <tbody>
                    <tr>
                      <td>Home 3</td>
                    </tr>
                    <tr>
                      <td><strong>Rp400.000/bulan</strong></td>
                    </tr>
                    <tr>
                      <td>100MBPS</td>
                    </tr>
                    <tr>
                      <td>Unlimited FUP</td>
                    </tr>
                    <tr>
                      <td>Support 24/7</td>
                    </tr>
                    <tr>
                      <td><button class="btn btn-primary">Beli</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      `,
            showCloseButton: true, // Menampilkan tombol close
            showConfirmButton: false,
            width: '90%', // Menentukan lebar SweetAlert
        });
    });
    </script>

    <!-- Script untuk navbar -->
    <script>
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('#navbar');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
    console.log('Scrolled:', scrollPosition);
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mendapatkan elemen tautan area
    var areaLink = document.getElementById('areaco');

    // Menambahkan event listener untuk saat tautan diklik
    areaLink.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan perilaku default dari tautan

        // Menampilkan SweetAlert dengan konten HTML khusus (peta Google Maps)
        Swal.fire({
            title: "Coverage Area",
            html: '<div id="map" style="width: 100%; height: 300px;"></div>',
            showCancelButton: true,
            showConfirmButton: false,
            cancelButtonText: "Close",
            width: '80%', // Menyesuaikan lebar SweetAlert
            height: '80%',
            onOpen: function() {
                // Memuat peta Google Maps setelah SweetAlert terbuka
                loadGoogleMaps();
            }
        });
    });

    // Fungsi untuk memuat peta Google Maps
    function loadGoogleMaps() {
        // Membuat peta Google Maps yang terfokus pada Makassar
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -5.147665, lng: 119.432731 }, // Koordinat untuk Makassar
            zoom: 12 // Perbesar sejumlah ini
        });

        // Membuat penanda untuk lokasi Makassar
        var marker = new google.maps.Marker({
            position: { lat: -5.147665, lng: 119.432731 },
            map: map,
            title: "Makassar, Sulawesi Selatan, Indonesia"
        });
    }
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Memuat pustaka Google Maps JavaScript API secara asinkron -->
<script src="https://maps.googleapis.com/maps/api/js?callback=loadGoogleMaps&libraries=&v=weekly"></script>


<script src="{{ asset('js/particles.js') }}"></script>
    <script>
        particlesJS.load('particles-js', '{{ asset('particles.json') }}');
    </script>


<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-providers/leaflet-providers.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slick-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false, // Atur kecepatan slider otomatis (dalam milidetik)
        dots: false, // Aktifkan titik navigasi
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    })
  });
</script>

<script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>


</body>
</html>