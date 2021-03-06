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
                            <input type="number" class="form-control @error('id') is-invalid @enderror" name="id" value="{{old('id')}}">
                            <div class="invalid-feedback">
                                @error('id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Menu</label><br>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}">
                            <div class="invalid-feedback ">
                                @error('nama')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Harga</label><br>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" min="100" max="10000" value="{{old('harga')}}">
                            <div class="invalid-feedback">
                                @error('harga')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Kategori</label><br>
                            <select name="kategori" class="form-control @error('kategori') is-invalid @enderror" >
                                <option value="" disabled>Select This</option>
                                <option value="Appetizer">Appetizer</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Dessert">Dessert</option>
                                <option value="Drink">Drink</option>
                            </select>
                            <div class="invalid-feedback">
                                @error('kategori')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label><br>
                            <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" >
                            <div class="invalid-feedback">
                                @error('desc')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label><br>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" >
                            <div class="invalid-feedback">
                                @error('gambar')
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