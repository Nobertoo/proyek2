@extends('admin.base')


@section('content')

<div class="container-fluid">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
                <a class="btn btn-dark float-right" href="{{url('datapenyakit/create')}}"><li class="fa fa-plus"></li> Tambah</a>
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
                         <td>
                            <div class="btn-group">
                            <a href="{{url('datapenyakit', $penyakit->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('admin.utils.delete', ['url'=>url('datapenyakit/delete', $penyakit->id)])
                            </div>
                         </td>
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