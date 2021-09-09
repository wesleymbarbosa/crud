<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    // all desenvolvedor
    public function index(Request $request)
    {
        // dd($request->all());
        $desenvolvedor = Developer::all()->toArray();

        return array_reverse($desenvolvedor);
    }

    // add dev
    public function store(Request $request)
    {
        $dev = new Developer([
            'nome' => $request->input('nome'),
            'sexo' => $request->input('sexo'),
            'idade' => $request->input('idade'),
            'hobby' => $request->input('hobby'),
            'datanascimento' => $request->input('datanascimento'),
        ]);
        $dev->save();

        return response()->json('Developer adicionado com sucesso');
    }

    // edit dev
    public function show($id)
    {
        $dev = Developer::find($id);

        return response()->json($dev);
    }

    // update dev
    public function update($id, Request $request)
    {
        $dev = Developer::find($id);
        $dev->update($request->all());

        return response()->json('Developer atualizado com sucesso');
    }

    // delete dev
    public function destroy($id)
    {
        $dev = Developer::find($id);
        $dev->delete();

        return response()->json('Developer deletado com sucesso');
    }
}
