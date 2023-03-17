<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class CategoryController extends Controller
{
    public function index($id = 1)
    {
        $data['title'] = 'Lê Vĩnh Lộc Blog 2';
        $data['listPosts'] = Post::where('id_category', $id)->paginate(4);

        return view('pages.home', $data);
    }
}
