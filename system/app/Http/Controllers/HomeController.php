<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function ShowBeranda(){
		return view('admin/beranda');
	}

	function ShowDatagejala(){
		return view('admin/datagejala');
	}

	function ShowDatapenyakit(){
		return view('admin/datapenyakit');
	}

	function ShowDatalokasi(){
		return view('admin/datalokasi');
	}

}