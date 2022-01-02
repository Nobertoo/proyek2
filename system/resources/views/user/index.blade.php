@extends('admin.base')


@section('content')

<div class="container-fluid">
 <div class="row">
 	<div class="col-md-12 mt-5">
 		<div class="card">
 			<div class="card-header">
                <a class="btn btn-dark float-right" href="{{url('admin/user/create')}}"><li class="fa fa-plus"></li> Tambah</a>
 				Tambah Data User
 			</div>
 			<div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </thead>
                    <tbody>
                        @foreach ($list_user as $user)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                         <td>
                            <div class="btn-group">
                            <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('admin.utils.delete', ['url'=>url('user/delete', $user->id)])
                            </div>
                         </td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nama}}</td>
                        <td>{{$user->alamat}}</td>
                        <td>{{$user->foto}}</td>
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