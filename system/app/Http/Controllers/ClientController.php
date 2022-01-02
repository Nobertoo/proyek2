<?php 
namespace App\Http\Controllers; 
use App\Models\Penyakit;
use DB;

class ClientController extends Controller{
	function Beranda(){
		return view('index'); 

	}

	function diagnosaGejala(){
		// $data['list_penyakit'] = Penyakit::all();
		// return view('penyakitclient', $data); 
		$data['list_gejala'] = DB::table('gejala')->select('*')->get();
		// dd($data['list_gejala']);
		return view('index', $data); 
	}

	function data1(){
		$request_gejala = request()->kode_gejala;
		$hasil = $request_gejala;
		// dd($hasil);
		$list_data_penyakit = DB::table('penyakit')->select('*')->get();
		// dd($list_data_penyakit);
		if($request_gejala == ["G001","G002","G003","G004","G005","G009"]){
			// Query_diagnosa
			$data['list_penyakit'] = DB::table('penyakit')
				->select("penyakit.kode_penyakit", "penyakit.nama_penyakit", DB::raw("penyakit.keterangan as p_ket"), "solusi.kode_solusi", DB::raw("solusi.keterangan as s_ket"))
				->join('solusi','penyakit.id','solusi.id_penyakit')
				->where("kode_penyakit","P001")
				->get();
				// dd($data['list_penyakit']);
		}elseif($request_gejala == ["G001","G002","G003","G004","G005","G006","G007","G010","G013","G015"]){
			$data['list_penyakit'] = DB::table('penyakit')
				->select("penyakit.kode_penyakit", "penyakit.nama_penyakit", DB::raw("penyakit.keterangan as p_ket"), "solusi.kode_solusi", DB::raw("solusi.keterangan as s_ket"))
				->join('solusi','penyakit.id','solusi.id_penyakit')
				->where("kode_penyakit","P002")
				->get();
				// dd($data['list_penyakit']);
		}else{
			$data['list_penyakit'] = "tidak ada";
		}
		return view('data1',$data);
	}
}

// Query_diagnosa
// SELECT penyakit.kode_penyakit, penyakit.nama_penyakit, penyakit.keterangan as p_ket, solusi.kode_solusi, solusi.keterangan as s_ket
// FROM `penyakit` 
// join solusi on penyakit.id=solusi.id_penyakit
// where kode_penyakit='P001';