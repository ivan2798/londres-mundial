<?php

namespace App\Http\Controllers;

use App\Lider;
use Illuminate\Http\Request;

class LiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lideres = Lider::all();  
        return view('lideres.lideresIndex', compact('lideres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lideres.lideresForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'tipo' => 'required|string|min:4|max:8'] ); 


        Lider::create($request->all());  
        session()->flash('storel','Agregado realizado');
        return redirect()->route('lideres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function show(Lider $lideres)
    {
        return view('lideres.lideresShow',compact('lideres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function edit(Lider $lideres)
    {
        return view('lideres.lideresForm',compact('lideres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lider $lideres)
    {
        $this->validate($request,['nombre' => 'required|string|min:4|max:8', 
        'tipo' => 'required|string|min:4|max:8'] ); 
        
        $lideres->nombre = $request->nombre; 
        $lideres->tipo = $request->tipo; 
      
        

        $lideres->save();  

        session()->flash('upl','Actualizado realizado');
        return redirect()->route('lideres.show',$lideres->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lider $lideres)
    {
        $lideres->delete();  
        session()->flash('statusl','Destruido realizado');
        return redirect()->route('lideres.index');
    }
}
