<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function show()
    {
        //Список последних новостей
        $news = News::orderBy('id', 'desc')->take(10)->get();
        //Список категорий
        $categories = Category::all();
        return view('/default/index', ['news' => $news, 'categories' => $categories]);
    }


}
