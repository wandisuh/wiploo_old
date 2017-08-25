<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct() {
		
	}
	
	public function index() {
		$categories = Category::get();
		return view('backend.category.index', compact('categories'));
	}
	
	public function add() {
		return view('backend.category.add');	
	}
	
	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            'published' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
		
		$category = new Category;
		$category->name = $request->name;
		$category->slug = str_slug($request->name);
		$category->published = $request->published;
		$category->save();
		
		return redirect()->route('data-categories')->with('success','Data berhasil disimpan.');
	}
	
	public function edit($id) {
		$category = Category::find($id);
		return view('backend.category.edit',compact('category'));
	}
	
	public function delete_category($id) {
		$category = Category::find($id);
		$category->delete();
		return redirect()->route('data-categories')->with('alert-success', 'berhasil dihapus.');
	}
	
	public function update(Request $request) {
		$category = Category::find($request->id);
		$category->name = $request->name;
		$category->slug = str_slug($request->name);
		$category->published = $request->published;
		$category->save();
		return redirect()->route('data-categories')->with('alert-success', 'berhasil dihapus.');;
	}
	
}
