<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use \App\event;

/**
 * Class EventsController
 * @package App\Http\Controllers\Frontend\User
 */
class EventsController extends Controller
{

    public function getAll()
    {
        $events = event::all();
        return view('frontend.events',['events' => $events])
            ->withUser(access()->user());
    }

    public function find_by_id($id)
    {
        $event = event::find($id);
        
        return view('frontend.user.event.show',['event' => $event])
            ->withUser(access()->user());
    }

    public function store(Request $request)
    {
        $event= new event();

        $event->name = $request->name;
        $event->description = $request->description;
        $event->starting_date = $request->starting_date;
        $event->ending_date = $request->ending_date;
        $event->assigned_to = $request->assigned_to;
        $event->save();
    }

}
