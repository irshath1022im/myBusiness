<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'customer_id', 'visa_id', 'amount','remark'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function transections()
    {
        return $this->hasMany(Transection::class);
    }

    public function visa_costs()
    {
        return $this->hasMany(VisaCost::class);
    }



}
