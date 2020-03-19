<?php

namespace App\Http\Controllers;

use App\Contact_message;
use Illuminate\Http\Request;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function formulariocontacto(Request $request){
        // dd ($request);
        if($request->file('archivo')){
            $path = Storage::disk('public_uploads')->put('archivos', $request->file('archivo'));
            $request['url'] = asset('uploads/'.$path);

        }
        Mail::to('theadri1228@gmail.com')->send(new EmailContact($request));

        return back()->withInput()->with('flash_message', 'Mensaje Enviado');
        
        
 }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Guardar Mensaje';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function show(Contact_message $contact_message)
    {
        return view('layouts.principal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact_message $contact_message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact_message $contact_message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact_message  $contact_message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_message $contact_message)
    {
        //
    }
}
