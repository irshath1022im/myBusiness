<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaAssignment extends Model
{
    use HasFactory;

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function visa_holder()
    {
        return $this->belongsTo(VisaHolder::class);
    }
}
