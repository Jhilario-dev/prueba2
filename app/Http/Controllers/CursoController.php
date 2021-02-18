<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;

class CursoController extends Controller
{
    public function index(){

        $cursos = curso::all();


        return view('cursos.index', compact('cursos'));

    }

    public function create(){

        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show',['curso'=> $curso]);

    }
}
