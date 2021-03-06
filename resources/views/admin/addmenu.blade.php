@extends('main.admin')
@section('content')
    <div class="container">
        <form action="/admin/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">ID</label><br>
                            <input type="number" class="form-control @error('ID') is-invalid @enderror" name="ID" value="{{old('ID')}}">
                            <div class="invalid-feedback">
                                @error('ID')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Menu</label><br>
                            <input type="text" class="form-control @error('Nama') is-invalid @enderror" name="Nama" value="{{old('Nama')}}">
                            <div class="invalid-feedback ">
                                @error('Nama')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Harga</label><br>
                            <input type="number" class="form-control @error('Harga') is-invalid @enderror" name="Harga" min="100" max="10000" value="{{old('Harga')}}">
                            <div class="invalid-feedback">
                                @error('Harga')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Kategori</label><br>
                            <select name="Kategori" class="form-control @error('Kategori') is-invalid @enderror" >
                                <option value="" disabled>Select This</option>
                                <option value="Appetizer">Appetizer</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Dessert">Dessert</option>
                                <option value="Drink">Drink</option>
                            </select>
                            <div class="invalid-feedback">
                                @error('Kategori')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label><br>
                            <input type="text" class="form-control @error('Deskripsi') is-invalid @enderror" name="Deskripsi" >
                            <div class="invalid-feedback">
                                @error('Deskripsi')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label><br>
                            <input type="file" class="form-control @error('Gambar') is-invalid @enderror" name="Gambar" >
                            <div class="invalid-feedback">
                                @error('Gambar')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection