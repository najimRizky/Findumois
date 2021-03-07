@extends('main.admin')
@section('content')
    <div class="container mt-5">
        <div class="col-12 ml-3 text-right">
            <a href="addmenu" type="button" class="btn-info btn mb-4 text-right">Add Menu</a>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class='table table-bordered table-hover table-striped' id='myTable' cellspacing='0'>
			<thead >
				<tr class="text-center">
					<th>ID</th>
					<th>Nama</th>
					<th>Kategori</th>
					<th>Harga</th>
                    <th>Gambar</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody class="text-center ">
				@foreach ($menus as $item)
                    <tr data-aos="fade-right">
                        <td class="align-center">{{$item->ID}}</td>
                        <td>{{$item->Nama}}</td>
                        <td>{{$item->Kategori}}</td>
                        <td>{{$item->Harga}}</td>
                        <td> <?= '<img src="data:image/jpeg;base64,'.base64_encode($item->Gambar).'" style="width: 100px; height: 100px; object-fit: cover;" alt="'.$item->Nama.'"/>'; ?></td>
                        <td>
                            <a href="/admin/editmenu/{{$item->ID}}" type="button" class="btn btn-primary">Edit</a href="" type="button">
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
    </div>
@endsection