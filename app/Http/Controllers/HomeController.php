<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\ReaccuringEvent;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //Hello this is dog
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home', [
            "x"=> Role::getX(),
            "xx"=> Role::getXX(),
            "xxx"=> Role::getXXX(),
            "xxxx"=> Role::getXXXX(),
            "events" => Event::all(),
            "reaccuring_events" => ReaccuringEvent::all(),
            "articles" => Article::all(),
            'history' => Article::where('type', '1')->first(),
            'aboutus' => Article::where('type', '2')->first(),
            'rooms' => Article::where('type', '3')->first(),
        ]);
    }
}
