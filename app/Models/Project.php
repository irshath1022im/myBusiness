<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function visas()
    {
        return $this->hasMany(ProjectItemVisa::class);
    }

    public function sponsorChanges()
    {
        return $this->hasMany(ProjectItemSponsorChange::class);
    }

    public function project_type()
    {
        return $this->belongsTo(ProjectType::class);
    }
}
