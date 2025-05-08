<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;

class CompromissosController extends Controller
{
    public function index() {
        $compromissos = Compromisso::all();

        return view("compromissos/index", compact("compromissos"));
    }

    public function salvar(Request $request){
    
        Compromisso::create($request->all());

        return redirect()->route('compromissos');
    }

    public function editar(Compromisso $compromisso, Request $request){

        if ($request->isMethod('PUT')){

            $c = Compromisso::findOrFail($request->id);

           $c->fill($request->all());

           $c->save();

           return redirect()->route('compromissos');
        }

        return view('compromissos.editar', compact('compromisso'));

    }

    public function apagar(Request $request){
        $comp = Compromisso::findOrFail($request->id);

        $comp->delete();

        return redirect()->route('compromissos');
    }
}
