<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class EventController extends Controller

{
    public function index() {

        $nome = "Jhow";
        $idade = 22;

        $arr = [10,20,30,40,50];

        $nomes = ['Matheus', 'Maria', 'João', 'Saulo'];

        return view('welcome', 
        ['nome' => $nome, 
        'idade' => $idade, 
        'profissao' => "Mecanico",
        'arr' => $arr, 
        'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }

    public function products(){
        return view('products');
    }
}
