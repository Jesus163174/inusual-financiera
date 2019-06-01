<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model{
    
    protected $table = 'credits';
    protected $primaryKey = 'id';

    protected $fillable = ['totalamount','wainnings','totalpayments','date','customer_id'];
    
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function total(){
        return $this->count();
    }

    public function totalMoneyLent(){
        return number_format($this->sum('totalamount'),2,'.',',');
    }

    public function totalWainnings(){
        return number_format($this->sum('wainnings'),2,'.',',');
    }

    public function applyPercentage($total){
        return $total * .20;
    }

    public function validate($request){
        return $request->validate([
            'totalamount'=>'required',
            'wainnings'=>'required',
            'totalpayments'=>'required',
            'customer_id'=>'required'
        ]);
    }

    public function store($validated){
        return Credit::create($validated);
    }

    public function edit($credit,$request){
        return $credit->fill($request)->save();
    }

    public function scopeCredits($query,$status){
        return $query->byStatus($status)->orderBy('created_at','desc');
    }

    public function scopebyStatus($query,$status){
        return $query->where('status',$status);
    }

    public function scopeByCustomer($query,$customerId){
        return $query->where('customer_id',$customerId);
    }
}
