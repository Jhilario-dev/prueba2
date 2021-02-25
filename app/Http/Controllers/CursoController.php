<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = curso::paginate();


        return view('cursos.index', compact('cursos'));

    }

    public function create(){

        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        // $curso= new curso();

        // $curso->nombre = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso = curso::create([
            'name'=> $request->nombre,
            'descripcion'=> $request->descripcion,
            'categoria'=> $request->categoria 
        ]);

        return redirect()->route('cursos.show',$curso);

    }

    
    public function show(curso $curso){
        
        return view('cursos.show',compact('curso'));
        
    }


    public function edit(curso $curso){

        return view('cursos.edit',compact('curso'));
    
        
    }

    public function update(Request $request , curso $curso){


        $request->validate([
            'name'=>'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria'  => 'required'
        ]);

        $curso->nombre = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso);

    }
}
