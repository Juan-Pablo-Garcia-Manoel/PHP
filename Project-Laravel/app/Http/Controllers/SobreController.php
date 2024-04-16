<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index()
    {
        $nome = 'Nome: Juan Pablo Garcia Manoel';
        $matricula = 'Matricula: 37157';
        $nome_da_disciplina = 'Nome da disciplina: Técnologia Atuais em Desenvolvimento de Software';
        
        return view('index', compact('nome','matricula','nome_da_disciplina'));
    }
}
