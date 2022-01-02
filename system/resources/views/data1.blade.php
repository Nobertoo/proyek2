<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penyakit</title>
</head>
<body>

<table border="1">
	<tr>
		<th>kode_penyakit</th>
		<th>nama_penyakit</th>
		<th>keterangan_penyakit</th>
		<th>kode_solusi</th>
		<th>solusi_keterangan</th>
	</tr>
	@foreach($list_penyakit as $d)
	<tr>
		<td>{{$d->kode_penyakit}}</td>
		<td>{{$d->nama_penyakit}}</td>
		<td>{{$d->p_ket}}</td>
		<td>{{$d->s_ket}}</td>
	</tr>
	@endforeach
</table>
<tr></tr>
<table border="1">
	<tr>
		<th>kode_penyakit</th>
		<th>nama_penyakit</th>
		<th>keterangan_penyakit</th>
		<th>kode_solusi</th>
	</tr>
	@foreach($list_penyakit as $d)
	<tr>
		<td>{{$d->kode_penyakit}}</td>
		<td>{{$d->nama_penyakit}}</td>
		<td>{{$d->p_ket}}</td>
		<td>{{$d->kode_solusi}}</td>
		<td>{{$d->s_ket}}</td>
	</tr>
	@endforeach
</table>

</body>
</html>


