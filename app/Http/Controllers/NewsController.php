<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    //
    public function show($id)
    {
        $categories = Category::all();
        $newsById = News::find($id);
        $imgUrl = $newsById->img;
        if ($imgUrl=="") {
            $imgUrl = 'default.jpg';
        }

        return view('/default/news', ['categories' => $categories, 'newsById' => $newsById, 'imgUrl' => $imgUrl]);
    }

}
