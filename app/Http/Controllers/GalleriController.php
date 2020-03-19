<?php

namespace App\Http\Controllers;

use App\Galleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Carbon\Carbon;
use File;

class GalleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles('admin');
        $Galleri = Galleri::paginate(5);
        return view('galleri.indexgalleri',compact('Galleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleri.creategalleri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/galleri';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $galleri = new Galleri;
                $galleri->titulo=$request->titulo;
                $galleri->descripcion=$request->descripcion;
                $galleri->Nombre_imagen=$request->Nombre_imagen;
                $galleri->imagen=$img;
                $galleri->save();
                // galleri::create($requestData);    
                $mensaje = "Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }
        return redirect()->route('galleri.index')->with('success','Item creado Exitosamente!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galleri  $galleri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Galleri = Galleri::findOrFail($id);
        return view('galleri.showgalleri',compact('Galleri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galleri  $galleri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Galleri = Galleri::findOrFail($id);
        return view('galleri.editgalleri',compact('Galleri')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galleri  $galleri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/galleri';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $galleri = new galleri;
                $galleri->titulo=$request->titulo;
                $galleri->descripcion=$request->descripcion;
                $galleri->Nombre_imagen=$request->Nombre_imagen;
                $galleri->imagen=$img;
                $galleri = Galleri::findOrFail($id);
                $archivo_antiguo = $galleri->imagen;
                $galleri->update($requestData);
                if (File::delete($archivo_antiguo)) {
                    $mensaje = "Actualizado correctamente :3";
                }else{
                    $mensaje = "Actualizado.. Error al eliminar la imagen";
                }
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }else{
            $requestData = $request->all();
            $galleri = Galleri::findOrFail($id);
            $galleri->update($requestData);
        }
            return redirect()->route('galleri.index')->with('success','Item Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galleri  $galleri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galleri = Galleri::findOrFail($id);
        $Galleri->delete();
        return redirect()->route('galleri.index')->with('success','Item Eliminado Exitosamente!');
    }
    
}

