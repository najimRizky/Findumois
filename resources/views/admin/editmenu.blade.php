@extends('main.admin')
@section('content')
    <div class="container mt-5">
        <div class="col-12 ml-3 text-right">
            <a href="addmenu" type="button" class="btn-info btn mb-4 text-right">Add Menu</a>
        </div>
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
                    <tr>
                        <td class="align-center">{{$item->ID}}</td>
                        <td>{{$item->Nama}}</td>
                        <td>{{$item->Kategori}}</td>
                        <td>Rp{{$item->Harga}}</td>
                        <td> <?= '<img src="data:image/jpeg;base64,'.base64_encode($item->Gambar).'" style="width: 100px; height: 100px; object-fit: cover;" alt="'.$item->Nama.'"/>'; ?></td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
    </div>
@endsection