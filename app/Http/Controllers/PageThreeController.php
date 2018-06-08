<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageThreeController extends Controller
{

	Public function articlesPageThree(){
	    $articles = DB::table('articles')
	    ->where ('page', 3)
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
