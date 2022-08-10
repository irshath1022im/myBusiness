<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorChangeLog extends Model
{
    use HasFactory;

    public function sponsor_change()
    {
        return $this->belongsTo(SponsorChange::class);
    }
}
