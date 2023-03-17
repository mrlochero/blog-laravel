<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // view register
    public function register()
    {
        return view('authentication.register');
    }

    // create register
    public function registerAdd(UserRequest $request)
    {
        $data = $request->all();
        $data = array_slice($data, 1, -1);

        $data['password'] = Hash::make($request->password);

        $createUser = Users::create($data);
        if ($createUser) {
            return redirect()
                ->route('user.login')
                ->with('msg', 'Đăng ký thành công');
        } else {
            return back()->with('msg', 'Đăng ký lỗi');
        }
    }

    // view login
    public function login()
    {
        return view('authentication.login');
    }

    //check login
    public function loginCheck(UserRequest $request)
    {
        return 1;
        // dd(1);
        // $data['name'] = $request->name;
        // $data['password'] = $request->password;
        // dd($data);
        // $check = Auth::attempt($data);
    }
}
