<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    
    protected $primaryKey = 'id';
    protected $table = 'customers';
    protected $fillable = ['fullname','email','phone','homeaddress','businessadress'];

    public function scopeCustomers($query){
        return $query->orderBy('id','desc');
    }
    public function validate($request){
        return $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'homeaddress'=>'required',
            'businessadress'=>'required'
        ]);
    }
    public function store($validated){
        return Customer::create($validated);
    }
    public function edit($customer,$request){
        return $customer->fill($request)->save();
    }
}
