@extends('main.main')

@section('title','Cart')

@section('content')
  <div class="contaier">
    <div class="row">
      <div class="col-lg-8 ">
        <!-- Card -->
        <div class="card wish-list mb-3">
          <div class="card-body">
  
            <h5 class="mb-4">Cart (<span><?= count($data) ?></span> items)</h5>
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
                        
                        <input class="quantity" min="0" name="quantity" value="{{$item->Jumlah}}" type="number" readonly>
                        
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0"><span><strong>Rp{{$item->Harga}}.-</strong></span></p>
                    <p>Total: Rp<?= number_format($item->Harga*$item->Jumlah) ?>.-</p>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mb-4">
            @endforeach

            {{-- Batas Foreach --}}
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection