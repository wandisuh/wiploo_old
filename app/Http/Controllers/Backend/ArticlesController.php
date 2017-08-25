<?php

namespace App\Http\Controllers\Backend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use File;


class ArticlesController extends Controller
{
	const THUMB_WIDTH = 260;
    const THUMB_HEIGHT = 200;
    //
	public function __construct() {
		
	}
	
	public function index() {
		$articles = Article::get();
		return view('backend.articles.index', compact('articles'));
	}
	
	public function addArticle() {
		$categories = Category::where('published', 1)->get();
		return view('backend.articles.addArticle', compact('categories'));
	}
	
	public function store(Request $request) { 
		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2000',
            'content' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
		
		$destinationPath = 'upload/img_artikel/';
		$imgFile = $request->file('image');
		$extension = $imgFile->getClientOriginalExtension();
		$imgFileName = microtime(true) . '.' . $extension;
		
		//Create thumb
		$thumbName = "thumb_" . $imgFileName;
		Image::make($imgFile->getRealPath())->fit(self::THUMB_WIDTH, self::THUMB_HEIGHT)->save($destinationPath . $thumbName);

		$imgFile->move($destinationPath, $imgFileName);
		
		$article = new Article;
		$article->title = $request->title;
		$article->category_id = $request->category_id;
		$article->author = 'Admin wiploo';
		$article->image = $imgFileName;
		$article->content = $request->content;
		$article->slug = str_slug($request->title);
		$article->save();
		
		return redirect()->route('data-articles')->with('success','Data berhasil disimpan.');
	}
	
	public function editArticle() {}
	
	public function updateArticle() {}
	
	public function deleteArticle() {}
}
