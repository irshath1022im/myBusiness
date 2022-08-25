<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = ['cancell','under process', 'under outsite process', 'waiting for medical result', 'ready to print', 'valid to use', 'used insite country'];

        foreach($status as $item)
        {
            Status::create([null,$item]);
        }
    }
}
