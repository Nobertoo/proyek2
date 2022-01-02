@extends('views.index')

@section('content')
<div class="container-fluid">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
 				Tambah Data Penyakit
 			</div>
 			<div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @foreach ($list_penyakit as $penyakit)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$penyakit->kode_penyakit}}</td>
                        <td>{{$penyakit->nama_penyakit}}</td>
                        <td>{{$penyakit->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
 			</div>
 		</div>
 	</div>
 </div>
</div>

@endsection