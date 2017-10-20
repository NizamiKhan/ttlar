<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    //выборка новостей по категории id
    public function actionCategory($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
//        dump($category);
        $news = $category->news()->orderBy('id', 'desc')->paginate(12);
//        dump($news);
        return view('/default/category', ['news' => $news, 'categories' => $categories,'category'=>$category]);
    }
}
