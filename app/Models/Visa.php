<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;

    protected $fillable = ['purchase_id', 'company_id', 'vpnumber', 'cost', 'position', 'country'];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
