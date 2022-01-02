<?php 
namespace App\Http\Controllers; 
use App\Models\Penyakit;

class ClientController extends Controller{
	function Beranda(){
		return view('index'); 

	}

	function Penyakit(){
		$data['list_penyakit'] = Penyakit::all();
		return view('penyakitclient', $data); 
	}
}
