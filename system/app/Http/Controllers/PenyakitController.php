<?php

namespace App\Http\Controllers;
use App\Models\Penyakit;
 
class PenyakitController extends Controller {
	function index(){
		$data['list_penyakit'] = Penyakit::all();
		return view('penyakit.index', $data); 

	}
	function create(){
		return view('penyakit.create'); 

	}
	function store(){
		$penyakit = new Penyakit;
		$penyakit -> kode_penyakit = request('kode_penyakit');
		$penyakit -> nama_penyakit = request('nama_penyakit');
		$penyakit -> keterangan = request('keterangan');

		$penyakit -> save();

		return redirect('admin/datapenyakit')->with("success","Data Berhasil Ditambahkan!");

	}
	
	function edit(Penyakit $penyakit){
		$data['penyakit'] = $penyakit;
		return view('penyakit.edit', $data);

	}
	function update(Penyakit $penyakit){
		$penyakit -> kode_penyakit = request('kode_penyakit');
		$penyakit -> nama_penyakit = request('nama_penyakit');
		$penyakit -> keterangan = request('keterangan');

		$penyakit -> save();

		return redirect('admin/datapenyakit');

	}
	function destroy(Penyakit $penyakit){
		$penyakit->delete();

		return redirect('admin/datapenyakit');

	}
}