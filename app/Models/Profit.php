<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'visa_id', 'amount', 'remark' ];


    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }
}
