@extends('admin.base')

@section('content')

<div class="container">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
                <button class="btn btn-dark float-right"><li class="fa fa-plus"></li> Tambah</button>
 				Tambah Data User
 			</div>
 			<div class="card-body">
                <form action="{{url('admin/user')}}" method="post">
                    @csrf
	 				<div class="form-group">
	 					<label for="" class="control-label">Email</label>
	 					<input type="email" class="form-control" name="email">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Nama</label>
	 					<input type="text" class="form-control" name="nama">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Alamat</label>
	 					<input type="text" class="form-control" name="alamat">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Foto</label>
	 					<input type="file" class="form-control" name="foto">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Password</label>
	 					<input type="password" class="form-control" name="password">
	 				</div>
	                <button class="btn btn-dark float-right" > <li class="fa fa-save"></li> Simpan</button>
                </form>
 			</div>
 		</div>
 	</div>
 </div>
</div>

@endsection