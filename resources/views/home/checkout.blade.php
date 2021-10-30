@extends('layout.frontend2')

@section('content')
    <section class="w-100 py-3">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="alert alert-warning">
                        IP Anda Sekarang adalah 127.0.0.1
                    </div>
                </div>
                <div class="col-md-5 mb-2">
                    <img src="https://via.placeholder.com/500x200" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 table-responsive mb-2">
                    <table class="table">
                        <tr>
                            <th width='150px'>Kode</th>
                            <th width='30px' class="text-start">:</th>
                            <td class="text-start">DN10K</td>
                        </tr>
                        <tr>
                            <th width='150px'>Nama</th>
                            <th width='30px' class="text-start">:</th>
                            <td class="text-start">Dana 10k</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>:</td>
                            <td>Rp. 0</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 mt-3 mb-3">
                    <p class="fs-3">Metode Pembayaran</p>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="btn btn-primary w-100">Transfer Bank</div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="btn btn-primary w-100">Virtual Account</div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="btn btn-primary w-100">E-Wallet</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn btn-success fs-4 w-100">
                        <i class="fas fa-coins"></i> Bayar Sekarang
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <p class="mb-0 pb-3 border-bottom border-3 text-center fs-2 fw-bold"><i
                            class="fas fa-shopping-cart"></i>&nbsp;Produk Lainnya</p>
                </div>
            </div>
        </div>
    </section>
@endsection
