<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();

//        $connection = 'sqlite';
//        $users = User::factory()->count(3)->make();
//        $users->each(function($model) use ($connection){
//           $model->setConnection($connection);
//           $model->save();
//        });
    }
}
