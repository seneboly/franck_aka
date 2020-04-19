<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gallery;
use App\Article;
use App\Message;

class AdminController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
	}

    public function index(){

    	$articles = Article::with('category')->get();
    	$categories = Category::with('posts')->get();
    	$galleries = Gallery::all();
    	$messages = Message::all();

    	return view('backoffice.index', compact('articles', 'categories', 'galleries', 'messages'));
    }
}
