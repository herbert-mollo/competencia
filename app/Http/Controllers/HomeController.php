<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //$request->user()->authorizeRoles('admin');
        $Home = Home::paginate(5);
        return view('home.indexhome',compact('Home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.createhome');
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
            $path  = 'imagenes/home';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $home = new Home;
                $home->titulo=$request->titulo;
                $home->descripcion=$request->descripcion;
                $home->imagen=$img;
                $home->save();
                // home::create($requestData);    
                $mensaje = "Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }
        return redirect()->route('home.index')->with('success','Item creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Home = Home::findOrFail($id);
        return view('home.showhome',compact('Home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Home = Home::findOrFail($id);
        return view('home.edithome',compact('Home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $Home
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
            $path  = 'imagenes/home';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $home = new home;
                $home->titulo=$request->titulo;
                $home->descripcion=$request->descripcion;
                $home->imagen=$img;
                $home = Home::findOrFail($id);
                $archivo_antiguo = $home->imagen;
                $home->update($requestData);
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
            $home = Home::findOrFail($id);
            $home->update($requestData);
        }
            return redirect()->route('home.index')->with('success','Item Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        $home->delete();
        return redirect()->route('home.index')->with('error','Item Eliminado Exitosamente!');
    }
    
}
