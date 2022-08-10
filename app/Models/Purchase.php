<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function visas()
    {
        return $this->hasMany(Visa::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
