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
        $news = News::orderBy('id', 'desc')->paginate(12);
        //Список категорий
        $categories = Category::all();
        return view('/default/index', ['news' => $news, 'categories' => $categories]);
    }
}
