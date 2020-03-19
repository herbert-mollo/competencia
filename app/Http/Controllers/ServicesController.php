<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Carbon\Carbon;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // //////$request->user()->authorizeRoles('admin');
        $Services = Services::paginate(5);
        return view('services1.index',compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services1.create');
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
            'titulo_imagen' => 'required',
            'descripcion_imagen' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/services';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $services = new services;
                $services->titulo = $request->titulo;
                $services->descripcion = $request->descripcion;
                $services->titulo_imagen = $request->titulo_imagen;
                $services->descripcion_imagen = $request->descripcion_imagen;
                $services->imagen=$img;
                $services->save();
                // services::create($requestData);    
                $mensaje = "Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }
        return redirect()->route('services.index')->with('success','Item creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Services = Services::findOrFail($id);
        return view('services1.show',compact('Services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Services = Services::findOrFail($id);
        return view('services1.edit',compact('Services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'titulo_imagen' => 'required',
            'descripcion_imagen' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/services';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $services = new Services;
                $services->titulo = $request->titulo;
                $services->descripcion = $request->descripcion;
                $services->titulo_imagen = $request->titulo_imagen;
                $services->descripcion_imagen = $request->descripcion_imagen;
                $services->imagen=$img;
                $services = Services::findOrFail($id);
                $archivo_antiguo = $services->imagen;
                $services->update($requestData);
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
            $services = services::findOrFail($id);
            $services->update($requestData);
        }
            return redirect()->route('services.index')->with('success','Item Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Services = Services::findOrFail($id);
        $Services->delete();
        return redirect()->route('services.index')->with('success','Item Elimiado Exitosamente!');
    }
  
}
