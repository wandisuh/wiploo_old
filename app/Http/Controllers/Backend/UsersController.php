<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
//use App\Models\User;
use Redirect;

class UsersController extends Controller
{
    //
	public function login() {
		return view('backend.user.login');
	}
	
	public function doLogin() {
		return 'aa';
	}
	
	public function profile() {
		
	}
	
	public function logout() {
		
	}
	
}
