<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;


class LokasiController extends Controller{
	function index(){
		$data['list_lokasi'] = Lokasi::all();
		return view('lokasi.index', $data);
	}
	function create(){
		return view('lokasi.create');
	}
	function store(){
		$lokasi = new lokasi;
		$lokasi = nama_dokter -> request('nama_dokter');
		$lokasi = alamat -> request('alamat');
		$lokasi = foto -> request('foto');
		$lokasi -> save();

		return redirect('lokasi')->with("succes", "Data Berhasil Ditambahkan!");
	}

	function edit(lokasi $lokasi){
		$data['lokasi'] = $lokasi;
		return view('lokasi.edit', $data);
	}
	function update(Lokasi $lokasi){
		$lokasi = new lokasi;
		$lokasi = nama_dokter -> request('nama_dokter');
		$lokasi = alamat -> request('alamat');
		$lokasi = foto -> request('foto');
		$lokasi -> save();

		return redirect('lokasi');
	}
	function destroy(Lokasi $lokasi){
		$lokasi ->delete();
	}

}