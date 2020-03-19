<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use Carbon\Carbon;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles('admin');
        $Blog = Blog::paginate(5);
        return view('blog.indexblog',compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.createblog');
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
            'nombre' => 'required',
            'cargo' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/blog';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $blog = new Blog;
                $blog->nombre=$request->nombre;
                $blog->cargo=$request->cargo;
                $blog->imagen=$img;
                $blog->save();
                // blog::create($requestData);    
                $mensaje = "Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }
        return redirect()->route('blog.index')->with('success','Item creado Exitosamente!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Blog = Blog::findOrFail($id);
        return view('blog.showblog',compact('Blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blog = Blog::findOrFail($id);
        return view('blog.editblog',compact('Blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'cargo' => 'required',
            'imagen' => 'sometimes|required'           
		]);

        if($request->file('imagen')){
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $imagen = Image::make($file);
            $nom = str_replace(':','-',str_replace(' ','-',Carbon::now()->toDateTimeString().'.'.$extension)); 
            $path  = 'imagenes/blog';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$nom; 
            if($imagen->save($img)) {
                $requestData = $request->all();
                $requestData['imagen'] = $img;
                $blog = new Blog;
                $blog->nombre=$request->nombre;
                $blog->cargo=$request->cargo;
                $blog->imagen=$img;
                $blog = Blog::findOrFail($id);
                $archivo_antiguo = $blog->imagen;
                $blog->update($requestData);
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
            $blog = Blog::findOrFail($id);
            $blog->update($requestData);
        }
            return redirect()->route('blog.index')->with('success','Item Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::findOrFail($id);
        $Blog->delete();
        return redirect()->route('blog.index')->with('success','Item Eliminado Exitosamente!');
    }
    
}
