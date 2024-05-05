<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Net | Always Connected</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/julianet.ico') }}" type="image/x-icon"> <!-- Menambahkan favicon -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    @include('layouts.navbar')



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

@include('layouts.footer')


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