<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credit;
class CreditController extends Controller{

    public function index(){
        $status = "prestado";
        $credits = Credit::credits($status)->get();
        $results = new Credit();
        return view('credits.index',compact('credits','results'));
    }
    public function create(){
        $customers = Customer::customers()->get();
        return view('credits.create',compact('customers'));
    }
    public function store(Request $request){
        try{
            $credit    = new Credit();
            $validated = $credit->validate($request);
            $credit->store($validated);
            $msj = "El credito fue agregado correctamente";
            return redirect('creditos/clientes/'.$credit->customer->id)->with('status_success',$msj); 
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
    public function show($id){
        $credit = Credit::find($id);
        return view('credits.show',compact('credit'));
    }
    public function edit($id){
        $credit = Credit::find($id);
        $customers = Customer::customers()->get();
        return view('credits.edit',compact('credit','customers'));
    }
    public function update(Request $request, $id){
        //
    }
    public function destroy($id){
        //
    }
}
