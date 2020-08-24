<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Pessoa;
class ApiController extends Controller
{
    //

    public function index ()
    {
      // $data = Http::get('viacep.com.br/ws/69097-120/json/')->json();
      //return Http::get('viacep.com.br/ws/69097-120/json/')->json();
      //return view('layout.index' /*,['data'=> $data]*/);
      $pessoas = Pessoa::all();
      return view ('layouts.index', compact('pessoas'));

    }
    public function create(){

        return view('layouts.create');
    }

    public function store(Request $req){

        $pessoas = Pessoa::create($req->all());
        return redirect('/api');


        }
        public function show(Pessoa $api){

            return view ('layouts.show', compact('api'));
        }

        public function edit($id){

        $pessoas = Pessoa::find($id);
      //  dd($pessoas->nome.$pessoas->cep);
        return view ('layouts.edit', ['pessoas' => $pessoas]);

        }


        public function update(Request $request, $id){

            $validaDados = $request->validate([
                'nome' => 'required',
                'telefone' => 'required',
                'cep' => 'required',
                'rua' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'uf' => 'required',

                ]);

                \App\Pessoa::whereId($id)->update($validaDados);
                return redirect('/api')->
                with('sucsess','Os dados foram atualizados!!');
        }


         public function destroy($id){

            $pessoas= \App\Pessoa::find($id);
            $pessoas->delete();

            return redirect('/api');

        }

}
