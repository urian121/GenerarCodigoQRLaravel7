<?php

namespace App\Http\Controllers;

use App\empleado;
use Illuminate\Http\Request;
/*use App\Http\Controllers\QrCode;*/

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = empleado::orderBy('id', 'DESC')->get();
        return view('welcome', compact('empleados'));
    }


}
