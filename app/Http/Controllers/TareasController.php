<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller
{
    //para guardar se utiliza como convencion un store
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3'
        ]);

        $tareas=new Tarea();
        $tareas->title=$request->title;
        $tareas->save();

        return redirect('tareas')->with('Success','Tarea Creada Correctamente');
    }

    public function index(){
        $tareas=Tarea::all();
        return view('tareas.index',['tareas'=>$tareas]);
    }

    public function show($id){
        $tarea=Tarea::find($id);
        return view('tareas.show',['tarea'=>$tarea]);
    }

    public function update(Request $request ,$id){
        $tarea=Tarea::find($id);
        $tarea->title=$request->title;
        $tarea->save();
        return redirect()->route('tareas')->with('success','Tarea Actualizada');

    }

 
    public function destroy($id){
        $tarea=Tarea::find($id);
        $tarea->delete();
        return redirect()->route('tareas')->with('success','Tarea Eliminada');

    }
}
