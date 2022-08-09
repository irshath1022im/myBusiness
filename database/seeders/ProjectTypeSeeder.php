<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $project_types = [
            ['type' => 'VISA'],
            ['type' => 'SPONSOR CHANGE']
        ];

        ProjectType::insert($project_types);
    }
}
