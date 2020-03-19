<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Carbon\Carbon;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        //$request->user()->authorizeRoles('admin');
        $About = About::paginate(5);
        return view('about.indexabout',compact('About'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.createabout');

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
            $path  = 'imagenes/about';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $about = new About;
                $about->titulo=$request->titulo;
                $about->descripcion=$request->descripcion;
                $about->imagen=$img;
                $about->save();
                // About::create($requestData);    
                $mensaje = "Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }
        return redirect()->route('about.index')->with('success','Item creado Exitosamente!');

        
       
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $About = About::findOrFail($id);
        return view('about.showabout',compact('About'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $About = About::findOrFail($id);
        return view('about.editabout',compact('About'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $About = About::findOrFail($id);
        // $About->titulo = $request->titulo;
        // $About->descripcion = $request->descripcion;
        // // $Abouts->imagen = $request->imagen;
        // if($request->file('imagen')){
        //     $path = Storage::disk('public_uploads')->put('about', $request->file('imagen'));
        //     $request->imagen ='uploads/'.$path;
                
        // }
        // $About->imagen = $request->imagen;
        // $About->save();
        // return redirect()->route('about.index')->with('success','Item Actualizado Exitosamente!');
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
            $path  = 'imagenes/about';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $about = new About;
                $about->titulo=$request->titulo;
                $about->descripcion=$request->descripcion;
                $about->imagen=$img;
                $about = About::findOrFail($id);
                $archivo_antiguo = $about->imagen;
                $about->update($requestData);
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
            $about = About::findOrFail($id);
            $about->update($requestData);
        }
        
            return redirect()->route('about.index')->with('success','Item Actualizado Exitosamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $About = About::findOrFail($id);
        $About->delete();
        return redirect()->route('about.index')->with('success','Item Eliminado Exitosamente!');
    }
   
}
