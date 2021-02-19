<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;

class CursoController extends Controller
{
    public function index(){

        $cursos = curso::paginate();


        return view('cursos.index', compact('cursos'));

    }

    public function create(){

        return view('cursos.create');
    }

    public function show($id){

        $curso = curso::find($id);


        return view('cursos.show',compact('curso'));

    }
}
