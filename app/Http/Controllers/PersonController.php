<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        return view('dashboard.Person.index', ['Person' => $persons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person=new person();
                $person->First_Name=$request->input('name');
                $person->type=$request->input('Persona_Natural');
                $person->Last_Name=$request->input('apellido');
                $person->Document_type=$request->input('tipo_documento');
                $person->Adress=$request->input("address");
                $person->Document_Number=$request->input('numero_documento');
                $person->phone=$request->input("phone");
                $person->email=$request->input('email');
                $person->save();
                return view('dashboard.Person.messege',['msg'=>'Persona creada exitosamente.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $person = Person::findOrFail($id);
        // return view('dashboard.Person.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person = Person::findOrFail($id);
        return view('dashboard.Person.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $person= person::find($id);
                $person->First_Name=$request->input('name');
                $person->type=$request->input('Persona_Natural');
                $person->Last_Name=$request->input('apellido');
                $person->Document_type=$request->input('tipo_documento');
                $person->Adress=$request->input("address");
                $person->Document_Number=$request->input('numero _documento');
                $person->phone=$request->input("phone");
                $person->email=$request->input('email');
                $person->save();
                return view('dashboard.Person.messege',['msg'=>'Persona creada exitosamente.']);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $category= Person::find($id);
        $category->delete();
        return redirect("dashboard/Person")->with('success', 'Persona eliminada exitosamente.');
    }

}
