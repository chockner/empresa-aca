<?php

namespace App\Http\Controllers;

use App\Models\Persona;

use DB;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = DB::table('persona')->get();
        //$personas = Persona::latest()->paginate(2);
        return view('personas', compact('personas'));
    }

    public function show($id)
    {
        return Persona::find($id);
        /*         return view('show', [
                    'persona' => Persona::find($id)
                ]); */
    }
}
