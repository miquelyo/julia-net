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

    <h2 style="font-weight: bold; text-align: center; font-size: 40px; margin-bottom:-80px;" class="mt-10">CONTACT US</h2>

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


@include('layouts.footer')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>