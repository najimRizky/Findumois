<div class="mx-4 mb-4">
    <div class="card" style="width: 17rem;" data-aos="fade-left" >
        {{-- <img class="card-img-top" src="https://source.unsplash.com/random/200x150" alt="Card image cap"> --}}
        <?= '<img src="data:image/jpeg;base64,'.base64_encode($item->Gambar).'" style="width: 100%; height: 220px; object-fit: cover;" alt="'.$item->Nama.'"/>'; ?>
        {{-- <img src="data:image/jpeg;base64,'.base64_encode({{$item->Gambar}}).'"/> --}}
        <div class="card-body">
            <h5 class="card-title text-center">{{$item->Nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->Kategori}}</h6>
            <p class="text-center" style="color: red; font-weight: bold;">Rp{{$item->Harga}}</p>
            <div class="row justify-content-around">
                <button  class="btn btn-link" style="color: red; font-weight: bold; font-style: underline;" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="{{$item->Deskripsi}}">+ Detail</button>
                @guest
                <a href="/login" class="btn btn-warning " style="font-weight: bold">Pesan <br></a>
                @else
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$item->ID}}">
                    Pesan
                </button>
                @endguest
            </div>
        </div>
    </div> 
</div>
<div class="modal fade" id="modal{{$item->ID}}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Konfirmasi Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
                <form action="/pesan/langsung" method="POST" enctype="multipart/form-data" oninput='jumlah.setCustomValidity(jumlah.value <=0 ? "Minimal 1 pesanan!" : "")'>
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
                    <button type="submit" class="btn btn-primary">Pesan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
            </div>
            <div class="modal-footer">
                {{-- <a href="/pesan/{{$item->ID}}/{{}}" type="button" class="btn btn-warning" style="font-weight: bold">Pesan Langsung<br></a> --}}
                {{-- <a href="#" type="button" class="btn btn-warning" style="font-weight: bold">Add to Cart</a> --}}
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                {{-- <a href="/pesan/{{$item->ID}}" class="btn btn-warning " style="font-weight: bold">Pesan <br></a> --}}
            </div>
        </div>
    </div>
</div>