@extends('layout.frontend')

@section('content')
    <section class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <p class="mb-0 pb-3 border-bottom border-3 text-center fs-2 fw-bold"><i
                            class="fas fa-shopping-cart"></i>&nbsp;Cara Pembayaran</p>
                </div>
                <div class="col-12 mb-3">
                    <p class="fs-4 mb-2">
                        1. Pembeli Memilih Produk
                    </p>
                    <p class="fs-4 mb-2">
                        2. Pembeli Membayar Produk
                    </p>
                    <p class="fs-4 mb-2">
                        3. Memilih Metode Pembayaran
                    <ul class="fs-5">
                        <li>
                            Transfer Bank
                        </li>
                        <li>
                            Virtual Account
                        </li>
                        <li>
                            E-Wallet
                        </li>
                    </ul>
                    </p>
                    <p class="fs-4 mb-2">
                        4. Kirim Bukti Pembayaran melalui <a href="https://wa.me/6285641532396"
                            class="text-decoration-none text-success" target="_blank">WhatsApp</a>
                    </p>
                    <p class="fs-4 mb-2">
                        5. Proses Pengiriman
                    </p>
                    <p class="fs-4 mb-2">
                        6. Selesai
                    </p>
                </div>
                <div class="col-12">
                    <p class="fs-5">NB : Jika dalam proses pengiriman belum masuk, silahkan hubungi <a
                            href="https://wa.me/6285641532396" class="text-decoration-none text-success"
                            target="_blank">Admin.</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
