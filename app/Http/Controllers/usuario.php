<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuario extends Controller
{
    public function index()
    {
        $people=Person::all();
        return PersonResourse::collection($people);
    }


    public function store(Request $request)
    {
        $usuario= new Person();
        $usuario->nombreUsuario=$request->nombreUsuario;
        $usuario->nombreCompleto=$request->nombreCompleto;
        $usuario->email=$request->email;
        $usuario->telefono=$request->telefono;
        $usuario->edad=$request->edad;
        $usuario->fechaNacimiento=$request->fechaNacimiento;
        if($usuario->save()){
            return new UusarioResourse($usuario);
        }

        public function update(Request $request, $id)
    {
        $usuario =  Usuario::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->fullName = $request->fullName;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->age = $request->age;
        $usuario->dateOfBirth = $request->dateOfBirth;
        $usuario->setting_id = $request->setting_id;

        if($users->save())
        {
            return new UserResource($useuario);
        }

        public function show(Usuario $usuario)
        {
            //
        }

        public function edit(Usuario $usuario)
        {
            //
        }


        public function destroy($id)
        {
            $user =  Usuario::findOrFail($id);
    
            if($user->delete())
            {
                return new UsuarioResource($usuario); 
            }
        }





}
