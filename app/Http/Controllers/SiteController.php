<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\User;
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

//        $news = News::find(1);
//        $user = $news->user->name;
//        dump($user);
        return view('/default/index', ['news' => $news, 'categories' => $categories]);
    }
}
