<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        foreach(range(1,50) as $key => $value)
        {
            Task::create([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail()
            ]);
        }
    }
}
