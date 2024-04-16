<?php

namespace App\Http\Controllers;
use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\View\View;

class filmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public readonly Filme $filme;

    public function __construct()
    {
        $this->filme = new Filme;
    }

    public function index()
    {
        $filmes = $this->filme->all();
        return view('filmes.index',data:['filmes'=>$filmes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filmes.create');
        return redirect()->route('filmes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $created = $this->filme->create([
        'nome' => $request->input('nome'),
        'ano'  => $request->input('ano'),
        'sinopse' => $request->input('sinopse'),
        'genero' => $request->input('genero')
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Filme $filme) : View
    {
        return view('filmes.show',['filme' => $filme]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filme $filme)
    {
        return view('filmes.edit',['filme' => $filme]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->filme->where('id',$id)->update($request->except(['_token','_method']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect()->back();
    }
}
