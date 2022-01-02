@extends('admin.base')


@section('content')

<div class="container-fluid">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
                <a class="btn btn-dark float-right" href="{{url('lokasi/create')}}"><li class="fa fa-plus"></li> Tambah</a>
 				Tambah Data Penyakit
 			</div>
 			<div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Nama Dokter</th>
                        <th>Alamat</th>
                        <th>foto</th>
                    </thead>
                    <tbody>
                        @foreach ($list_lokasi as $lokasi)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                         <td>
                            <div class="btn-group">
                            <a href="{{url('lokasi', $lokasi->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('admin.utils.delete', ['url'=>url('lokasi/delete', $lokasi->id)])
                            </div>
                         </td>
                        <td>{{$lokasi->nama_dokter}}</td>
                        <td>{{$lokasi->alamat}}</td>
                        <td>{{$lokasi->foto}}</td>
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