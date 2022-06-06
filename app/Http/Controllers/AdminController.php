<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\ReaccuringEvent;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminpanel', [
            "x"=> Role::getX(),
            "xx"=> Role::getXX(),
            "xxx"=> Role::getXXX(),
            "xxxx"=> Role::getXXXX(),
            "events" => Event::all(),
            "reaccuring_events" => ReaccuringEvent::all(),
            "articles" => Article::all(),
        ]);
    }

    public function roles(Request $request) {

        $role = new Role(['type' => 'x', 'name' => $request->get('x')]);
        $role->save();
        $role = new Role(['type' => 'xx', 'name' => $request->get('xx')]);
        $role->save();
        $role = new Role(['type' => 'xxx', 'name' => $request->get('xxx')]);
        $role->save();
        $role = new Role(['type' => 'xxxx', 'name' => $request->get('xxxx')]);
        $role->save();

        return redirect('admin')->with('status', 'Ämter aktualisiert!');

    }

    public function events(Request $request) {


        $start = \DateTime::createFromFormat('Y-m-d H:i:s',$request->get('start_date').' '.$request->get('start_time').':00');

        $name = $request->get('name');

        $event = new Event([
            'type' => $request->get('type'),
            'name' => $name,
            'description' => $request->get('description'),
            'start' =>  $start
        ]);

        $event->save();

        return redirect('admin')->with('status', 'Event "'.$name.'" angelegt');

    }

    public function events_delete(Event $event) {

        $name = $event->name;
        $event->delete();

        return redirect('admin')->with('status', 'Event "'.$name.'" gelöscht');
    }

    public function events_edit(Event $event) {

        return view('event', [
            "event" => $event,
        ]);

    }

    public function events_update(Request $request, Event $event) {
        $start = \DateTime::createFromFormat('Y-m-d H:i:s',$request->get('start_date').' '.$request->get('start_time').':00');
        $name = $request->get('name');

        $event->type = $request->get('type');
        $event->name = $name;
        $event->description = $request->get('description');
        $event->start =  $start;
        $event->save();

        return redirect('admin')->with('status', 'Event "'.$name.'" bearbeitet.');

    }


    public function reaccuring_events(Request $request) {


        $start = \DateTime::createFromFormat('Y-m-d H:i:s','2022-01-01 '.$request->get('start_time').':00');

        $name = $request->get('name');

        $event = new ReaccuringEvent([
            'type' => $request->get('type'),
            'name' => $name,
            'description' => $request->get('description'),
            'start' =>  $start
        ]);

        $event->save();

        return redirect('admin')->with('status', 'Event "'.$name.'" angelegt');

    }

    public function reaccuring_events_delete(ReaccuringEvent $event) {

        $name = $event->name;
        $event->delete();

        return redirect('admin')->with('status', 'Wöchentliches Event "'.$name.'" gelöscht');
    }

    public function reaccuring_events_edit(ReaccuringEvent $event) {

        return view('reaccuring_event', [
            "event" => $event,
        ]);

    }

    public function reaccuring_events_update(Request $request, ReaccuringEvent $event) {
        $start = \DateTime::createFromFormat('Y-m-d H:i:s','2022-01-01 '.$request->get('start_time').':00');
        $name = $request->get('name');

        $event->type = $request->get('type');
        $event->name = $name;
        $event->description = $request->get('description');
        $event->start =  $start;
        $event->save();

        return redirect('admin')->with('status', 'Wöchentliches Event "'.$name.'" bearbeitet.');

    }

    public function article_edit(Article $article) {

        return view('article', [
            "article" => $article,
        ]);

    }

    public function article_update(Request $request, Article $article) {
        $name = $request->get('name');

        $article->name = $name;
        $article->description = $request->get('description');
        $article->save();

        return redirect('admin')->with('status', 'Wöchentliches Event "'.$name.'" bearbeitet.');

    }
}
