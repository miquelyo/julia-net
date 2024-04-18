<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Net | Always Connected</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/julianet.ico') }}" type="image/x-icon"> <!-- Menambahkan favicon -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <style>
    body {
        overflow-x: hidden;
        /* Mengatur overflow-x menjadi hidden */
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar"
        style="transition: background-color 0.3s ease;">
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
                        <a class="nav-link poppins-medium" href="paket">PAKET</a>
                    </li>
                    <li class="nav-item" id="areaco">
                        <a class="nav-link poppins-medium" href="#">AREA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poppins-medium" href="#kontak">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="beranda" class="mb-5" style="position: relative; background-color: transparent; height: 600px;">
    <div id="particles-js" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: -1;"></div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Kolom kiri -->
            <div class="col-md-6 offset-md-1">
                <div class="text-left">
                    <!-- Ganti elemen gambar logo dengan teks -->
                    <h2 id="tagline" class="mb-3 mt-4" style="padding-top: 125px; font-size: 48px;"><b>ALWAYS CONNECTED</b></h2>
                    <!-- Teks pengganti logo -->
                    <p class="mb-3">Penuhi kebutuhan internet cepat di Indonesia bersama kami.</p>
                    <button class="pill-button">Gunakan sekarang</button>
                </div>
            </div>
        </div>
    </div>
</section>


    <b></b>
    <section id="tentang-kami" class="mb-5">
    <h2 class="text-center">Tentang Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>PT Julia Multimedia Nusantara adalah perusahaan Internet Service Provider (ISP), multimedia, dan
                    manage service berlisensi nasional. Dengan jaringan luas dan dukungan tim profesional, kami percaya
                    mampu memberikan layanan berkualitas bagi pelanggan Julia Net yang tersebar di seluruh Nusantara.
                </p>
                <p>Coverage luas dan tersebar di kota besar di Indonesia:</p>
                <ul>
                    <li>Makassar</li>
                    <li>Manado</li>
                    <li>Palu</li>
                    <li>Gorontalo</li>
                    <li>Kabupaten Parigi Moutong (Sulawesi Tengah)</li>
                    <li>Kabupaten Poso (Sulawesi Tengah)</li>
                    <li>Kabupaten Pinrang (Sulawesi Selatan)</li>
                    <li>Kabupaten Gowa (Sulawesi Selatan)</li>
                    <li>Kabupaten Kepulauan Selayar (Sulawesi Selatan)</li>
                    <li>Kabupaten Luwu (Sulawesi Selatan)</li>
                    <li>Kabupaten Minahasa Utara (Sulawesi Utara)</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div id="map-container"></div>
            </div>
        </div>
    </div>
</section>

    <section id="layanan" class="mb-5">
        <h2 class="text-center">Layanan</h2>
        <p class="text-center">JULIA NET hadir untuk memberikan solusi layanan internet dan Produk IT Digital untuk
            menunjang kemajuan teknologi dan Informasi di Indonesia.</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h5 class="text-center mb-4">Network Solution</h5>
                </div>
                <div class="col-md-3">
    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);"> <!-- Mengatur nilai offset pada sumbu y menjadi 10px -->
        <div class="card-body text-center">
            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                style="width: 100px; height: 100px; opacity: 10%;">
                <i class="fas fa-wifi"
                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
            </div>
            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">Internet Connection</h5>
            <p class="card-text mt-0" style="min-height: 120px; color: white;">Layanan yang menyediakan
                akses internet dengan beberapa pilihan kapasitas.</p>
        </div>
    </div>
</div>



                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-cogs"
                                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">Manage Service</h5>
                            <p class="card-text mt-0" style="min-height: 120px; color: white;">Layanan jasa tambahan
                                yang diberikan kepada pelanggan berupa manage perangkat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-server"
                                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">IT Infrastructure</h5>
                            <p class="card-text" style="min-height: 120px; color: white;">Infrastruktur IT yang
                                diberikan berupa tambahan infra network baik indoor maupun outdoor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-cloud"
                                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">Cloud Solution</h5>
                            <p class="card-text mt-0" style="min-height: 120px; color: white;">Layanan yang menyediakan
                                akses internet dengan beberapa pilihan kapasitas</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h5 class="text-center my-4">Software Solution</h5>
                </div>
                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-code"
                                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">Software Development
                            </h5>
                            <p class="card-text mt-0" style="min-height: 120px; color: white;">Buat dan kembangkan
                                software kustom sesuai kebutuhan bisnis maupun problem perusahaan dan organisasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-cogs" style="font-size: 40px; color: black; line-height: 100px;"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">ERP Customization</h5>
                            <p class="card-text mt-0" style="min-height: 120px; color: white;">Raih efisiensi dan
                                produktivitas organisasi dengan penggunaan solusi Enterprise Resource Planning (ERP)
                                yang dikustomisasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-layanan" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.9);">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-light mx-auto mb-3 position-relative"
                                style="width: 100px; height: 100px; opacity: 10%;">
                                <i class="fas fa-chart-line"
                                    style="font-size: 40px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            </div>
                            <h5 class="card-title mb-0" style="min-height: 40px; color: white;">Digital Marketing</h5>
                            <p class="card-text mt-0" style="min-height: 120px; color: white;">Tingkatkan pemasaran dan
                                penjualan bisnis di era digital, melalui analisa dan pembuatan strategi marketing yang
                                efektif efisien</p>
                        </div>
                    </div>
            </div>

        </div>
        </div>
        </div>
        </div>
    </section>


    <!-- Keunggulan-->
    <section id="keunggulan" class="mb-5">
        <h2 class="text-center">Keunggulan</h2>
        <b></b>
        <p class="text-center">ami memberikan layanan terbaik untuk bisnis Anda dengan manfaat yang tak terhitung.
            Berikut adalah manfaat yang Anda dapatkan dengan Julianet.</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Unlimited Internet</h5>
                            <p class="card-text">Akses internet tanpa batas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">99.% SLA</h5>
                            <p class="card-text">Jaminan untuk layanan anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Multiple Upstream</h5>
                            <p class="card-text">Sediakan upstream backup, pastikan koneksi Anda aktif 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dukungan Teknis 24x7</h5>
                            <p class="card-text">Kami selalu siap membantu Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sistem Monitoring</h5>
                            <p class="card-text">Layanan Anda dipantau 24/7 untuk memastikannya berjalan dengan sempurna setiap saat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Harga & Layanan Fleksibel</h5>
                            <p class="card-text">Katakan saja apa yang Anda inginkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="testimoni" class="mb-5">
        <h2 class="text-center">Testimoni Klien</h2>
        <div id="carouselTestimoni" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/150"
                                    class="rounded-circle img-fluid mx-auto d-block" alt="Testimoni Klien">
                            </div>
                            <div class="col-md-6">
                                <p>Testimoni dari klien mengenai pengalaman mereka dengan layanan kami. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/150"
                                    class="rounded-circle img-fluid mx-auto d-block" alt="Testimoni Klien">
                            </div>
                            <div class="col-md-6">
                                <p>Testimoni dari klien mengenai pengalaman mereka dengan layanan kami. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimoni" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimoni" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section> -->

    <section id="partner" class="mb-5">
        <h2 class="text-center">Partner</h2>
        <div class="container">
            <div id="partnerCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <img src="../img/partner/bca.jpg" class="d-block mx-auto" alt="Partner 1"
                                    style="width: 150px;">
                            </div>
                            <div class="col-md-2">
                                <img src="../img/partner/dana.jpg" class="d-block mx-auto" alt="Partner 2"
                                    style="width: 150px;">
                            </div>
                            <div class="col-md-2">
                                <img src="../img/partner/huawei.jpg" class="d-block mx-auto" alt="Partner 2"
                                    style="width: 150px;">
                            </div>
                            <div class="col-md-2">
                                <img src="../img/partner/kominfo.png" class="d-block mx-auto" alt="Partner 2"
                                    style="width: 150px;">
                            </div>
                            <!-- Tambahkan gambar partner lainnya di sini -->
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak carousel-item jika diperlukan -->
                </div>
                <a class="carousel-control-prev" href="#partnerCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#partnerCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>



    <section id="kontak" class="mb-5">
        <h2 class="text-center">Kontak</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-success text-black rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-center text-dark">
                                    <p class="h5">Penuhi kebutuhan internet cepat di Indonesia bersama kami.</p>
                                </div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control tvbrounded" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control rounded"
                                                placeholder="Nama Perusahaan">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control rounded" placeholder="Alamat Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control rounded" rows="3"
                                                placeholder="Pesan"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-light btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../img/julianet-logo.png" alt="Logo" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="office-info">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Jakarta Office</h5>
                                <p>SOHO Apartement Unit 2111,<br>
                                    Central Park Jakarta.<br>
                                    Jl. Letjen S. Parman Kav. 28<br>
                                    Jakarta Barat 11470</p>
                            </div>
                            <div class="col-md-6">
                                <h5>South Sulawesi Office</h5>
                                <p>Jl. Mapala Raya Blok E23/26,<br>
                                    Kota Makassar, Sulawesi Selatan 90222</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Central Sulawesi Office</h5>
                                <p>Jl. Raja Moili No.15 I,<br>
                                    Palu, Lere, Palu Timur,<br>
                                    Sulawesi Tengah, 94111<br>
                                    (+62) 823 4789 9868</p>
                            </div>
                            <div class="col-md-6">
                                <h5>North Sulawesi Office</h5>
                                <p>Jl. Tonsawang No. 31 Ling. 2,<br>
                                    Kel. Karombasan Selatan, Kec. Wanea Kota Manado<br>
                                    Sulawesi Utara 95117</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div>


    <!-- Footer -->
    <footer class="footer" style="background-color: #086623; font-size: 14px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left">
                    <p style="color: #fff;">Copyright &copy;{{ date('Y') }} JULIA NETWORK. All rights reserved | PT
                        Julia Multimedia Nusantara</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <a href="#" style="color: #fff; margin-right: 10px;">Privacy Policy</a>
                    <a href="#" style="color: #fff; margin-right: 10px;">Terms of Service</a>
                    <a href="#" style="color: #fff;">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

<!-- BAGIAN SCRIPT DAN SWEET ALERT-->

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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



    <!-- Script untuk Beranda halaman depan -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tagline = document.getElementById('tagline');
        const taglines = ['<b>ALWAYS CONNECTED</b>', '<b>ALWAYS PERFORM</b>'];
        let index = 0;

        setInterval(() => {
            index = (index + 1) % taglines.length;
            tagline.style.opacity = 0; // Mengatur opacity menjadi 0 untuk mulai fade out
            setTimeout(() => {
                tagline.innerHTML = taglines[
                    index]; // Menggunakan innerHTML untuk memasukkan teks dengan tag <b>
                tagline.style.opacity = 1; // Mengatur opacity kembali menjadi 1 untuk fade in
            }, 200); // Menunggu 500ms sebelum mengubah teks dan mulai fade in
        }, 2000); // Mengubah teks setiap 5 detik
    });
    </script>

    <!-- Script untuk navbar -->
    <script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const scrollPosition = window.scrollY;

        if (scrollPosition > 50) {
            navbar.classList.add('bg-light');
        } else {
            navbar.classList.remove('bg-light');
        }
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

<!-- Memuat pustaka Google Maps JavaScript API secara asinkron -->
<script src="https://maps.googleapis.com/maps/api/js?callback=loadGoogleMaps&libraries=&v=weekly"></script>


<script src="{{ asset('js/particles.js') }}"></script>
    <script>
        particlesJS.load('particles-js', '{{ asset('particles.json') }}');
    </script>


<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-providers/leaflet-providers.js"></script>
<script>
    var map = L.map('map-container').setView([-2.5489, 118.0149], 5); // Atur koordinat awal dan tingkat zoom

    L.tileLayer.provider('CartoDB.Positron').addTo(map); // Pilih tile layer hitam putih

    // Tambahkan pin di beberapa lokasi
    var locations = [
        { name: 'Makassar', coordinates: [-5.1477, 119.4327] },
        { name: 'Manado', coordinates: [1.4892, 124.8425] },
        { name: 'Palu', coordinates: [-0.8917, 119.8707] },
        { name: 'Gorontalo', coordinates: [0.6999, 122.4467] },
        { name: 'Parigi Moutong', coordinates: [-0.5387, 119.8072] },
        { name: 'Poso', coordinates: [-1.3984, 120.7529] },
        { name: 'Pinrang', coordinates: [-3.7585, 119.6525] },
        { name: 'Gowa', coordinates: [-5.3166, 119.5969] },
        { name: 'Kepulauan Selayar', coordinates: [-6.4299, 120.5528] },
        { name: 'Luwu', coordinates: [-2.5699, 120.0223] },
        { name: 'Minahasa Utara', coordinates: [1.6406, 124.6700] }
    ];

    locations.forEach(location => {
        L.marker(location.coordinates).addTo(map)
            .bindPopup(location.name);
    });
</script>

</body>

</html>