<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaAssignment extends Model
{
    use HasFactory;

    protected $fillable =['date','visa_id','visa_holder_id','expiry_date','status','visa_number'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function visa_holder()
    {
        return $this->belongsTo(VisaHolder::class);
    }
}
