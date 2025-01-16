<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
 
    public function run(): void {

        User::truncate();

        // Create the specific user for login
        User::create([
            'username' => '105221012',
            'name' => 'User 105221012',
            'email' => '105221012@example.com',
            'password' => bcrypt('password')
        ]);

        // Create additional users
        for ($i=10; $i<25; $i++) { 

            $nim = "1052210{$i}";
            
            User::create([
                'username' => $nim,
                'name' => "User {$nim}",
                'email' => "{$nim}@example.com",
                'password' => bcrypt('password'),
            ]);   
        }
    }
}
