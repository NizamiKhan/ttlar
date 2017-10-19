<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $categories = Category::all();
        return view('default.add_post', ['title' => 'Добавление новости', 'categories' => $categories]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'text' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->all();
        $news = new News();
        $news->name = $data['name'];
        $text = strip_tags($data['text']);
        $news->text = $text;
        $this->hasAnnouncement($data, $news, $text);
        $news->category_id = Category::where('name', $data['select'])->first()->id;
        $this->upload($request, $news);
        $user->news()->save($news);

        return redirect()->back()->with('message', 'Новость добавлена!');
    }

    public function hasAnnouncement($data, $news, $text)
    {
        if (!$data['announcement'] == "") {
            $news->announcement = $data['announcement'];
        } else {
            $news->announcement = substr($text, 0, 100);
        }
    }

    public function upload(Request $request, News $news)
    {
        $file = $request->file();
        foreach ($file as $f) {
            $imgName = time() . '_' . $f->getClientOriginalName();
            $f->move(public_path('images/news'), $imgName);
        }
        if (isset($imgName))$news->img = $imgName;
    }

    public function getForm()
    {
        return view('upload-form');
    }
}
