<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('pages.home', compact('articles', 'categories'));
    }

    public function category($slug)
    {	
    	$categories = Category::all();
    	$category = Category::where('slug', $slug)->firstOrFail();
        $articles = Category::find($category->id)->articles;
        // return $articles;
        return view('pages.category', compact('articles', 'category', 'categories'));
    }

    public function content($slug)
    {   
        $categories = Category::all();
        $article = Article::where('slug', $slug)->firstOrFail();
        // $articles = Category::find($category->id)->articles;
        // return $articles;
        return view('pages.article', compact('article', 'categories'));
    }
}
