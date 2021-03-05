<div class="mx-4 mb-4">
    <div class="card" style="width: 18rem;" data-aos="fade-left">
        {{-- <img class="card-img-top" src="https://source.unsplash.com/random/200x150" alt="Card image cap"> --}}
        <?= '<img src="data:image/jpeg;base64,'.base64_encode($item->Gambar).'" style="width: 100%; height: 220px; object-fit: cover;"/>'; ?>
        {{-- <img src="data:image/jpeg;base64,'.base64_encode({{$item->Gambar}}).'"/> --}}
        <div class="card-body">
            <h5 class="card-title text-center">{{$item->Nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->Kategori}}</h6>
            <p class="text-center" style="color: red; font-weight: bold;">Rp{{$item->Harga}}</p>
            <div class="row justify-content-around">
                <button  class="btn btn-link" style="color: red; font-weight: bold; font-style: underline;" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="{{$item->Deskripsi}}">+ Detail</button>
                <a href="#" class="btn btn-warning " style="border-radius: 100px;">Pesan <br></a>
            </div>
        </div>
    </div> 
</div>