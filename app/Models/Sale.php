<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'customer_id', 'visa_id', 'amount','remark'];

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function transections()
    {
        return $this->hasMany(Transection::class);
    }

    public function visa_costs()
    {
        return $this->hasManyThrough(
                            VisaCost::class,
                            Visa::class,
                            'id',
                            'visa_id',
                            'visa_id'
                        );

                        // select `visa_costs`.*, `visas`.`id` as `laravel_through_key` from `visa_costs` inner join `visas` on `visas`.`id` = `visa_costs`.`visa_id` where `visas`.`id` in (1, 2, 5)

                        //select
                        // `visa_costs`.*,  ( we need data fromt his table)
                        // `visas`.`id` as `laravel_through_key`  ( visa_id is general , both table ( sale and visa_costs) has visa_id, this will be used ad  a laravel_through_key )
                        // from `visa_costs` inner join `visas` on `visas`.`id` = `visa_costs`.`visa_id` where `visas`.`id` in (1, 2, 5)
    }



}
