<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaHolder extends Model
{
    use HasFactory;

    protected $fillable = ['name','passport_number','expiry_date','image','contact_number','country'];

    public function visa_assignment()
    {
        return $this->hasOne(VisaAssignment::class);
    }
}
