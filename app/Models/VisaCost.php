<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaCost extends Model
{
    use HasFactory;

    protected $fillable =['visa_id', 'date','remark', 'amount'];

    public function visa()
    {
        return $this->belongsTo(visa::class);
    }
}
