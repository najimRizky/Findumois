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
                                                </div>
                                                <div>
                                                    <div class="def-number-input number-input safari_only mb-0 w-100">
                                                        <input class="quantity" id="quantity{{$item->ID}}" style="width: 100px;" min="0" name="quantity" value="{{$item->Jumlah}}" type="number" readonly>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal{{$item->ID}}" onclick="getValue({{$item->Jumlah}},{{$item->ID}})">
                                                            Edit
                                                        </button>
                                                        <div class="modal fade" id="modal{{$item->ID}}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" >Edit Cart</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                    <div class="modal-body">
                                                                        <form action="/cart/edit" method="POST" enctype="multipart/form-data" oninput='jumlah.setCustomValidity(jumlah.value <=0 ? "Minimal 1 pesanan!" : "")'>
                                                                            <div class="form-group">
                                                                                @csrf
                                                                                <input type="number" hidden class="form-control" name="id_menu" id="id_menu" value="{{$item->ID}}">
                                                                                <input type="text" hidden class="form-control" name="email" value="{{ Auth::user()->email }}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="exampleFormControlInput1">Jumlah</label>
                                                                                <input type="number" oninput="showTotal({{$item->Harga}},{{$item->ID}})" class="form-control" required id="jumlah{{$item->ID}}" name="jumlah" placeholder="Minimal 1" min="1" max="50">
                                                                            </div>
                                                                            <p>Total: <span id="total{{$item->ID}}"></span></p>
                                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                                            <a href="deleteCart/{{$item->ID}}/{{Auth::user()->email}}" type="button" class="btn btn-danger">Delete</a>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                    <a href="/checkout" type="button" class="btn btn-danger mr-auto">Checkout</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getValue(jml,id){
            currJml = document.getElementById("quantity"+id).value;
            document.getElementById("jumlah"+id).value = currJml;
        }
        function showTotal(harga,id){
            jml = document.getElementById("jumlah"+id).value;
            total = harga*jml;
            if(jml>=0 && jml<=50){
                document.getElementById('total'+id).innerHTML = "Rp"+total.toLocaleString('en-US', {maximumFractionDigits:2});
                // var a = document.getElementById('cart'+id);
                // a.href = "keranjang/"+id+"/"+jml;
            }else if(jml>50){
                document.getElementById('total'+id).innerHTML = "Maksimal 50";
            }
            else{
                document.getElementById('total'+id).innerHTML = "Minimal jumlah 1";
            }
        }
    </script>
@endsection