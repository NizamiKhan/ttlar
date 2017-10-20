<?php

namespace App\Http\Controllers\Admin;

use App\Archive;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArchiveController extends Controller
{
    //
    public function show($id){
        $categories = Category::all();
//        dump($id);
        $archive=Archive::find($id);
        return view('default.archive', ['title' => 'Архив', 'categories' => $categories,'archive'=>$archive]);
    }
}
