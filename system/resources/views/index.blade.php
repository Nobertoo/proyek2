<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diagnosa</title>
</head>
<body>

<form action="{{url('penyakitclient/gejala')}}" method="get">
@csrf
<table border="1">
	<tr>
		<th>NO</th>
		<th>Pilih</th>
		<th>Kode Gejala</th>
		<th>Nama Gejala</th>
	</tr>
	@foreach($list_gejala as $gejala)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td><input type="checkbox" name="kode_gejala[]" value="{{$gejala->kode_gejala}}"></td>
		<td>{{$gejala->kode_gejala}}</td>
		<td>{{$gejala->nama_gejala}}</td>
	</tr>
	@endforeach
</table>
<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>

</form>

</body>
</html>