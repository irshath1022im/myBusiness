<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaHolder extends Model
{
    use HasFactory;

    public function visa_assignment()
    {
        return $this->hasOne(VisaAssignment::class);
    }
}
