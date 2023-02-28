<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeBlogController extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['title'] = 'Lê Vĩnh Lộc Blog';
        $this->data['listPosts'] = Post::paginate(4);
        return view('pages.home', $this->data);
    }
}
