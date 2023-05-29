<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //index action a rota principal da App é uma convecção mas não é obrigatorio
    public function index(){
        $events = Event::all();

        return view('welcome',['events'=>$events]);

    }

    public function create(){

         return view('events.create');
    }
}
