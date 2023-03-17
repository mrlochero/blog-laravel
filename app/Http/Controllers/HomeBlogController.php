<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeBlogController extends Controller
{
    public function index()
    {
        $data['title'] = 'Lê Vĩnh Lộc Blog';
        $data['listPosts'] = Post::paginate(4);
        return view('pages.home', $data);
    }

    public function getCategory($id = 0)
    {
        $postAll = post::where('id_category', $id);

        $data['title'] = 'Lê Vĩnh Lộc Blog';
        $data['listPosts'] = $postAll->paginate(4);

        return view('pages.home', $data);
    }
}
