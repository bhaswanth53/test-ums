<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Models\User;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        if($users->count() > 0) {
            foreach($users as $user) {
                $faker = Faker::create();

                for($i=0; $i<5; $i++) {
                    $user->tasks()->create([
                        'task' => $faker->realText(),
                        'status' => 'pending'
                    ]);
                }
            }
        }
    }
}
