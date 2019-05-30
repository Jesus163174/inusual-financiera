<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    
    public function index(){
       return view('users.index');
    }
    public function create(){
        $user = new User();
        
        return view('users.create',compact('user'));
    }
    public function store(Request $request){
        try{
            $user = new User();
            $validate = $user->validate($request);
            $user->store($validate);
            $msj = "Usuario registrado correctamente";
            return redirect('/admin/usuarios')->with('status_succes',$msj);
        }catch(Exception $e){
            return back()->with('status_danget',"Error en el servidor: ".$e->getMessage());
        }
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
    public function update(Request $request, $id){
        try{
            $user = User::find($id);
            $user->edit($request);
            $msj = "Usuario actualizado correctamente";
            return redirect('/admin/usuarios')->with('status_succes',$msj);
        }catch(Exception $e){
            return back()->with('status_danget',"Error en el servidor: ".$e->getMessage());
        }
    }
    public function destroy($id){
        $user = User::find($id);
        if($user->status == 'eliminado')
            $user->status = 'activo';
        else
            $user->status = 'eliminado';
        $user->save();
        return redirect('/admin/usuarios');
    }
}