<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminUpdatePostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $categories = Category::all();
        $user = Auth::user();
//        orderBy('id', 'desc')->paginate(12);
        $newsById = $user->news()->orderBy('id', 'desc')->paginate(10);
//        dump($news);
        return view('default.update_show', ['title' => 'Просмотр всех ваших новостей', 'categories' => $categories, 'newsById' => $newsById]);
    }

    public function showNew($id)
    {
        $categories = Category::all();
        $user = Auth::user();
        $newsById = News::find($id);
        dump($newsById);
//        return view('default.update-post', ['title' => 'Обновление новости', 'categories' => $categories,'newsById'=>$newsById]]);
//        return __METHOD__;
    }

    public function create($id)
    {
        return __METHOD__;
    }
}
