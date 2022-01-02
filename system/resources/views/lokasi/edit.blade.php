@extends('admin.base')

@section('content')

<div class="container">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
 				Tambah Data Lokasi
 			</div>
 			<div class="card-body">
                <form action="{{url('lokasi')}}" method="post">
                    @csrf
	 				<div class="form-group">
	 					<label for="" class="control-label">Nama Dokter</label>
	 					<input type="text" class="form-control" name="nama_dokter">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Alamat</label>
	 					<input type="text" class="form-control" name="alamat">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Foto</label>
	 					<input type="file" name="foto">
	 				</div>
	                <button class="btn btn-dark float-right" > <li class="fa fa-save"></li> Simpan</button>
                </form>
 			</div>
 		</div>
 	</div>
 </div>
</div>

@endsection