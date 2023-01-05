<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controle1 extends Controller
{
    public function index ()
    {
        $contatos = [
        (object)["nome"=>"Maria","tel"=>"997589876"],
        (object)["nome"=>"Pedro Lindo","tel"=>"98198837"],
        (object)["nome"=>"Joao","tel"=>"997588876"],
    ];
        return view('local.index',compact('contatos'));
    }

    public function criar (Request $req)
    {
        dd($req->all());
        return "criar do Local 1";
    }
    
    public function editar ()
    {
        return "editar do Local 1";
    }
}
