<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ////$request->user()->authorizeRoles('admin');
        $Contact = Contact::paginate(5);
        return view('contact.indexcontact',compact('Contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.createcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Contact = new Contact;
        $Contact->titulo = $request->titulo;
        $Contact->descripcion = $request->descripcion;
        $Contact->direccion = $request->direccion;
        $Contact->telefono = $request->telefono;
        $Contact->email = $request->email;
       
        $Contact->save();
        //return 'Guardado Correctamente';
        return redirect()->route('contact.index')->with('success','Item Creado Exitosamente!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Contact = Contact::findOrFail($id);
        return view('contact.showcontact',compact('Contact')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Contact = Contact::findOrFail($id);
        return view('contact.editcontact',compact('Contact'));  
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Contact = Contact::findOrFail($id);
        $Contact->titulo = $request->titulo;
        $Contact->descripcion = $request->descripcion;
        $Contact->direccion = $request->direccion;
        $Contact->telefono = $request->telefono;
        $Contact->email = $request->email;
        $Contact->save();
        return redirect()->route('contact.index')->with('success','Item Actualizado Exitosamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Contact = Contact::findOrFail($id);
        $Contact->delete();
        return redirect()->route('contact.indexcontact')->with('success','Item Eliminado Exitosamente!');
    }
    
}
