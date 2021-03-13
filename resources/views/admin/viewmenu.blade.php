@extends('main.admin')
@section('content')
    <div class="container mt-5">
        <div class="col-12 ml-3 text-right">
            <a href="/admin/addmenu" type="button" class="btn-info btn mb-4 text-right">Add Menu</a>
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
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{$item->ID}}">
                            Delete
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="modal{{$item->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <!-- <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete menu confi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                            <div class="modal-body">
                                Apakah kamu yakin menghapus menu <b>{{$item->Nama}}</b> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a type="button" class="btn btn-primary" href="/admin/delete/{{$item->ID}}">Delete</a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
			</tbody>
		</table>
    </div>

@endsection