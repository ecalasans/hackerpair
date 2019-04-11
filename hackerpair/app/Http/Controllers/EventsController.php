<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller{

    public function index(){
        $events = Event::simplePaginate(10);
        return view('events.index')->with('events', $events);
    }


    public function create(){   //Responsável por retornar a interface de introdução dos dados
        return view('events.create');
    }

    public function store(Request $request){   //Responsável por escrever os dados no database
        $request->validate(
            [
                'name' => 'required|string|min:10|max:50',
                'description' => 'required|string'
            ]
        );



        $event = Event::create(
            $request->input()
        );

        flash('Event created!')->success();

        return redirect()->route('events.index');
    }


    public function show(Event $event){
        return view('events.show')->with('event', $event);
    }


    public function edit(Event $event){  //Responsável por retornar a interface de alteração
        return view('events.edit')->with('event', $event);
    }


    public function update(Request $request, Event $event){  //Faz a alteração propriamente dita no banco de dados
        $event->update(
            $request->input()
        );

        flash('Event updated!')->success();

        return redirect()->route('events.index', $event);
    }

    public function destroy(Event $event){
        $event->delete();

        flash('Event deleted!')->success();

        return redirect()->route('events.index');
    }
}
