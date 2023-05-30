<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => Str::random(random_int(4, 15)),
                'email' => Str::random(random_int(4, 15)) . '@gmail.com',
                'password' => Hash::make(Str::random(8))
            ]);
        }
    }
}
