<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->records() as $record) {
            User::create($record);
        }
    }

    public static function records(): array
    {
        return [
            [
                'name' => 'amir',
                'family' => 'jp',
                'username' => 'amirjp',
                'email' => 'amir.jahanpour88@gmail.com',
                'email_verified_at' => '2031-10-01 20:23:47',
                'password' => bcrypt('amir1377'),
                'created_at' => now()
            ]
        ];
    }

}
