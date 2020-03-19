<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles('admin');
        $Testimonials = Testimonials::paginate(5);
        return view('Testimonials.indextest',compact('Testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Testimonials.createtest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Testimonials = new Testimonials;
        $Testimonials->titulo = $request->titulo;
        $Testimonials->descripcion_titulo = $request->descripcion_titulo;
        if($request->file('imagen')){
            $path = Storage::disk('public_uploads')->put('Testimonials', $request->file('imagen'));
            $request->imagen ='uploads/'.$path;
                
        }
        $Testimonials->imagen = $request->imagen;
        $Testimonials->nombre_cli = $request->nombre_cli;
        $Testimonials->save();
        return redirect()->route('testimonials.index')->with('datos','Registro Editado correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonials  $Testimonials
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Testimonials = Testimonials::findOrFail($id);
        return view('testimonials.showtest',compact('Testimonials')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonials  $Testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Testimonials = Testimonials::findOrFail($id);
        return view('testimonials.edittest',compact('Testimonials'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonials  $Testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Testimonials = Testimonials::findOrFail($id);
        $Testimonials->titulo = $request->titulo;
        $Testimonials->descripcion_titulo = $request->descripcion_titulo;
        if($request->file('imagen')){
            $path = Storage::disk('public_uploads')->put('Testimonials', $request->file('imagen'));
            $request->imagen ='uploads/'.$path;
                
        }
        $Testimonials->imagen = $request->imagen;
        $Testimonials->nombre_cli = $request->nombre_cli;
        $Testimonials->save();
        return redirect()->route('testimonials.index')->with('datos','Registro Editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials  $Testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Testimonials = Testimonials::findOrFail($id);
        $Testimonials->delete();
        return redirect()->route('testimonials.index');
    }
    
}
