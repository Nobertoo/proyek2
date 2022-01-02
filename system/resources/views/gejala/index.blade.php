@extends('admin.base')


@section('content')

<div class="container-fluid">
 <div class="row">
  <div class="col-md-12 mt-5">
   <div class="card">
    <div class="card-header">
        <a class="btn btn-dark float-right" href="{{url('datagejala/create')}}"><li class="fa fa-plus"></li> Tambah</a>
        Tambah Data Gejala
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Kode</th>
                <th>Nama</th>
            </thead>
            <tbody>
                @foreach ($list_gejala as $gejala)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{url('datagejala', $gejala->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('admin.utils.delete', ['url'=>url('datagejala/delete',$gejala->id)])
                        </div>
                    </td>
                    <td>{{$gejala->kode_gejala}}</td>
                    <td>{{$gejala->nama_gejala}}</td>
                    
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