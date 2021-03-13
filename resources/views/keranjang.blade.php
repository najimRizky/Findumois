@extends('main.main')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 ">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <!-- Card -->
                <div class="card wish-list mb-3">
                    <div class="card-body">
                        @if (count($data)==0)
                            <h1 class="text-center">Tidak Ada Pesanan</h1>
                        @else
                            <h5 class="mb-4 text-center">Cart (<span><?= count($data) ?></span> items)</h5>
                            <?php $total = 0; ?>
                            @foreach ($data as $item)
                                <div class="row mb-4">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                            <?= '<img src="data:image/jpeg;base64,'.base64_encode($item->Gambar).'" style="width: 100%; height: 120px; object-fit: cover;" alt="'.$item->Nama.'"/>'; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5>{{$item->Nama}}</h5>
                                                    <p class="mb-3 text-muted text-uppercase small"></p>
                                                    <p class="mb-2 text-muted text-uppercase small"></p>
                                                    <p class="mb-3 text-muted text-uppercase small"></p>
                                                </div>
                                                <div>
                                                    <div class="def-number-input number-input safari_only mb-0 w-100">
                                                        <input class="quantity" width="20px" min="0" name="quantity" value="{{$item->Jumlah}}" type="number" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0"><span>Rp{{$item->Harga}}.-</span></p>
                                                <p>Total: <strong>Rp<?= number_format($item->Harga*$item->Jumlah) ?>.-</strong></p>
                                                <?php $total+= $item->Harga*$item->Jumlah; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                            @endforeach
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <p>Total: <strong>Rp<?= number_format($total) ?>.-</strong></p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="/checkout" type="button" class="btn btn-primary mr-auto">Checkout</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection