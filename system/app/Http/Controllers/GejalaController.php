<?php 
namespace App\Http\Controllers; 
use App\Models\Gejala;

class GejalaController extends Controller{
	function index(){
		$data['list_gejala'] = Gejala::all();
		return view('gejala.index', $data); 

	}
	function create(){
		return view('gejala.create'); 

	}
	function store(){
		$gejala = new gejala;
		$gejala -> kode_gejala = request('kode_gejala');
		$gejala -> nama_gejala = request('nama_gejala');

		$gejala -> save();

		return redirect('admin/datagejala')->with("success","Data Berhasil Ditambahkan!");

	}
	
	function edit(Gejala $gejala){
		$data['gejala'] = $gejala;
		return view('gejala.edit', $data);

	}
	function update(Gejala $gejala){
		$gejala -> kode_gejala = request('kode_gejala');
		$gejala -> nama_gejala = request('nama_gejala');
		
		$gejala -> save();

		return redirect('admin/datagejala');

	}
	function destroy(Gejala $gejala){
		$gejala->delete();

		return redirect('admin/datagejala');

	}
}
