@extends('admin.base')

@section('content')

<div class="container">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
 				Tambah Data Penyakit
 			</div>
 			<div class="card-body">
                <form action="{{url('datapenyakit')}}" method="post">
                    @csrf
	 				<div class="form-group">
	 					<label for="" class="control-label">Kode</label>
	 					<input type="text" class="form-control" name="kode_penyakit">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Nama</label>
	 					<input type="text" class="form-control" name="nama_penyakit">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Keterangan</label>
	 					<textarea name="keterangan" id="" rows="5" class="form-control"></textarea>
	 				</div>
	                <button class="btn btn-dark float-right" > <li class="fa fa-save"></li> Simpan</button>
                </form>
 			</div>
 		</div>
 	</div>
 </div>
</div>

@endsection