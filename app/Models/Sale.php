<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


}
