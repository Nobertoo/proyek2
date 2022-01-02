<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data); 

	}
	function create(){
		return view('user.create'); 

	}
	function store(){
		$user = new User;
		$user -> level = 2;
		$user -> email = request('email');
		$user -> nama = request('nama');
		$user -> alamat = request('alamat');
		$user -> foto = request('foto');
		$user -> password = bcrypt(request('password'));

		$user -> save();

		return redirect('admin/user')->with('success', 'Data Berhasil Di Tambahkan');

	}
	
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);

	}
	function update(User $user){
		$user -> level = request('level');
		$user -> email = request('email');
		$user -> nama = request('nama');
		$user -> alamat = request('alamat');
		$user -> foto = request('foto');
		$user -> password = bcrypt(request('password'));

		$user -> save();

		return redirect('admin/user');

	}
	function destroy(User $user){
		$user->delete();

		return redirect('admin/user');

	}
}