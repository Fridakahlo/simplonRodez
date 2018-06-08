<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageOneController extends Controller
{

	Public function articlesPageOne(){
	    $articles = DB::table('articles')
	    ->where ('page', 1)
		->orderBy('position','asc')
	    ->get();

	    $infos;
	    $news = [];

		foreach ($articles as $article) {
			if ($article->position==1) {
				$infos = $article;
			} else {
				$news[] = $article;
			}
		}

	    return view('/home_sr', compact('infos', 'news'));

	}
	
}
