@extends('admin.base')

@section('content')

<div class="container">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
 				Edit Data User
 			</div>
 			<div class="card-body">
                <form action="{{url('admin/user/update', $user->id)}}" method="post">
                    @csrf
                    @method("PUT")
	 				<div class="form-group">
	 					<label for="" class="control-label">Level</label>
	 					<input type="text" class="form-control" name="level" value="{{$user->level}}">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Email</label>
	 					<input type="text" class="form-control" name="email" value="{{$user->email}}">
	 				</div>
	 				<div class="form-group">
	 				<div class="form-group">
	 					<label for="" class="control-label">Nama</label>
	 					<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Alamat</label>
	 					<input type="text" class="form-control" name="alamat" value="{{$user->alamat}}">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Foto</label>
	 					<input type="file" class="form-control" name="foto" value="{{$user->foto}}">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Password</label>
	 					<input type="password" class="form-control" name="password" value="{{$user->password}}">
	 				</div>
	                <button class="btn btn-dark float-right" > <li class="fa fa-save"></li> Simpan</button>
                </form>
 			</div>
 		</div>
 	</div>
 </div>
</div>

@endsection