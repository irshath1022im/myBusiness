<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectItemVisa extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }

    public function visa_costs()
    {
        return $this->hasMany(VisaCost::class);
    }

}
