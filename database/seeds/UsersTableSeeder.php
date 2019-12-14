<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
      factory(User::class, 50)->create()->each(function($user) {
        $user->save();
      });
    }
}
