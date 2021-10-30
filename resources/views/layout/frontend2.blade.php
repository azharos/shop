<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'
        integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=='
        crossorigin='anonymous' />

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <title>KANG KONTER</title>
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }

        .bg-grey {
            background-color: #f5f5f5;
        }

        .bg-utama {
            background-color: #00A19D;
        }

        .bg-dark-utama {
            background-color: #006866;
        }

        .text-utama {
            color: #006866;
        }

        .input-search {
            border: none;
            outline: none;
            width: 93%;
        }

        .menu-footer a:hover {
            text-decoration: underline !important;
        }

    </style>
    @yield('css')
</head>

<body class="bg-grey">

    <div class="w-100 bg-dark-utama py-2 d-lg-none d-block">
        <div class="container">
            <div class="row">
                <div class="col-auto m-auto">
                    <div class="fs-3 text-white mb-1 text-center">
                        <i class="fas fa-store"></i> Kang Konter
                    </div>
                    <div class="fs-6 text-white">
                        Jl. Sidoasih XI/22 Tlogosari Semarang
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w-100 bg-utama py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="fs-4 text-white mb-1">
                        <a href="{{ route('myshop') }}" class="text-decoration-none text-white">
                            <i class="fas fa-store"></i> Kang Konter
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="w-100 bg-white p-1 m-auto d-flex justify-content-between">
                            <input type="text" class="input-search" placeholder="Cari disini...">
                            <button type="button" class="btn bg-utama text-white"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="fs-4 text-end d-flex w-100 justify-content-end">
                        <div class="end">
                            <a href="" class="text-decoration-none text-white me-2">
                                <i class="far fa-address-book"></i>
                            </a>
                            <a href="" class="text-decoration-none text-white">
                                <i class="fas fa-list"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('content')

    {{-- Footer --}}
    <section class="w-100 py-3 bg-dark-utama text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3 border-bottom mb-2">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <h6 class="fw-bold pb-2 text-uppercase">Tagihan & Topup</h6>
                            <div class="menu-footer">
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    Pulsa
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    Kouta
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    Listrik
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    WiFi
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <h6 class="fw-bold pb-2 text-uppercase">Topup Saldo</h6>
                            <div class="menu-footer">
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    DANA
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    SHOPEEPAY
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    GOPAY
                                </a>
                                <a href="" class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    OVO
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <h6 class="fw-bold pb-2 text-uppercase">Metode Pembayaran</h6>
                            <div class="fw-light">
                                <p class="mb-1">Transfer Bank</p>
                                <p class="mb-1">Virtual Account</p>
                                <p class="mb-1">E-Wallet</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <h6 class="fw-bold pb-2 text-uppercase">Bantuan</h6>
                            <div class="menu-footer">
                                <a href="{{ route('cara.pembayaran') }}"
                                    class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    Cara Pembayaran
                                </a>
                                <a href="{{ route('cara.pembayaran') }}"
                                    class="fs-6 fw-light text-white mb-1 text-decoration-none d-block">
                                    Testimonial
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <p class="mb-0 fw-light">
                        &copy; 2021 - Kang Konter
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @yield('js')
</body>

</html>
