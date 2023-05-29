<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //index action a rota principal da App é uma convecção mas não é obrigatorio
    public function index(){
        //$events = Event::all();
        $nome="Matheus";
        $idade=29;
        $arr = [10,20,30,40,50];

        $nomes = ["Matheus","Maria","Joao","Saulo"];

        return view('welcome',
        [
            'nome2'=> $nome,
            'idade'=>$idade,
            'profissao'=>'Programador',
            'arr'=>$arr,
            'nomes'=>$nomes
        ]);

    }

    public function create(){

         return view('events.create');
    }
}
