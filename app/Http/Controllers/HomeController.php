<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
// 获取当前已通过认证的用户...


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response|View
     */
    public function index(view $view)
    {   
        // // 获取当前已通过认证的用户...
          $user = Auth::user();
          $username = $user['name'];
         // dd($username);
        //View::share('name','$username');
        //dd($user);

        return view('index')->with($username);
    }


}
