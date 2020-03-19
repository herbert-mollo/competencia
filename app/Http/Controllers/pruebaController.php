<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Carbon\Carbon;
use File;

class pruebaController extends Controller
{
    public function index(Request $request)
    {

        return view('prueba');
    }
   
}
