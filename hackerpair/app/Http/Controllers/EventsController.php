<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller{

    public function index(){
        $events = Event::simplePaginate(10);
        return view('events.index')->with('events', $events);
    }


    public function create(){
        //
    }

    public function store(Request $request){
        //
    }


    public function show(Event $event){
        return view('events.show')->with('event', $event);
    }


    public function edit(Event $event){
        //
    }


    public function update(Request $request, Event $event){
        //
    }

    public function destroy(Event $event){
        //
    }
}
