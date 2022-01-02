@extends('admin.base')

@section('content')

<div class="container">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
 				Edit Data Penyakit
 			</div>
 			<div class="card-body">
                <form action="{{url('datapenyakit/update', $penyakit->id)}}" method="post">
                    @csrf
                    @method("PUT")
	 				<div class="form-group">
	 					<label for="" class="control-label">Kode</label>
	 					<input type="text" class="form-control" name="kode_penyakit" value="{{$penyakit->kode_penyakit}}">
	 				</div>
	 				<div class="form-group">
	 					<label for="" class="control-label">Nama</label>
	 					<input type="text" class="form-control" name="nama_penyakit" value="{{$penyakit->nama_penyakit}}">
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