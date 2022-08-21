<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['customer', 'contact_number'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function transections()
    {
        return $this->hasMany(Transection::class);
    }
}
