<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use Illuminate\View\View;

use Illuminate\Http\Request;

class generoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public readonly Genero $genero;

    public function __construct()
    {
        $this->genero = new Genero;
    }

    public function index()
    {
        $generos = $this->genero->all();
        return view('generos.index',data:['generos'=>$generos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generos.create');
        return redirect()->route('generos.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->generos->create([
        'nome' => $request->input('nome')
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero):view
    {
         return view('generos.show',['genero' => $genero]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return view('generos.edit',['genero' => $genero]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->generos->where('id',$id)->update($request->except(['_token','_method']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->back();
    }
}
