<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class VideoController extends Controller
{
    //
    public function __construct() {
		$this->middleware('auth');
	}
	
}
