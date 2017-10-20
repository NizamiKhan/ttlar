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
        $catName = $newsById->category->name;
//
        return view('default.update-post', ['title' => 'Обновление новости', 'categories' => $categories, 'newsById' => $newsById, 'catName' => $catName]);
//        return __METHOD__;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'text' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->all();
        $news=News::find($data['id']);

        $news->name = $data['name'];
        $news->category_id = Category::where('name', $data['select'])->first()->id;
        $text = strip_tags($data['text']);
        $news->text = $text;
        $this->hasAnnouncement($data, $news, $text);
        $news->save();
        dump($data);



//        dump($news);
//        $news = new News();
//        $news->name = $data['name'];
//        $text = strip_tags($data['text']);
//        $news->text = $text;
//        $this->hasAnnouncement($data, $news, $text);
//        $news->category_id = Category::where('name', $data['select'])->first()->id;
//        $this->upload($request, $news);
//        $user->news()->save($news);
//
        return redirect()->back()->with('message', 'Новость обновлена!');
    }
    public function hasAnnouncement($data, $news, $text)
    {
        if (!$data['announcement'] == "") {
            $news->announcement = $data['announcement'];
        } else {
            $news->announcement = substr($text, 0, 100);
        }
    }
}
