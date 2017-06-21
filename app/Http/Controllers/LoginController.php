<?php
namespace App\Http\Controllers;

use Auth;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

	public function form(){
		return view('form_login');
	}

	public function login(){
		$credenciais = Request::only('email', 'password');
		
		if( Auth::attempt($credenciais) ) {
			return redirect('/produtos');
		} 

		return redirect('/login');
	}

}