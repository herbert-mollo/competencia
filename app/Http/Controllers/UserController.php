<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //$request->user()->authorizeRoles('admin');
        $nombre = $request->get('buscarpor');

        $user = user::where('name','like',"%$nombre%")->paginate(5);
        // $nombre = $request->get('buscarpor');
        // $user = user::where('name','like',"%nombre%")->paginate(5);
        return view('users.indexuser',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
              
        return view('users.createuser');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->rol_id = $request->rol_id;
        $user->save();
        // $userrol = new userrol;
        // $userrol->name = $request->name;
        // $userrol->save();
        
        //return 'Guardado Correctamente';
        return redirect()->route('user.index')->with('success','Item Creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.showuser',compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::findOrFail($id);
        return view('users.edituser',compact('user'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, $id)
    {
        $user = user::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->rol_id = $request->rol_id;

        $user->save();
        //return 'Guardado Correctamente';
        return redirect()->route('user.index')->with('success','Item Actualizado Exitosamente!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('info','Item Eliminado Exitosamente!');
    
  
}
}