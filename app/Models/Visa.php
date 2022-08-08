<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
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
