<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PointsController extends Controller
{
    //
	public function __construct() {
		
	}
	
	public function index() {
		return view('backend.points.index');
	}

	public function getData() {
		
	}
}
