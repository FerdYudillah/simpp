<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('passwordadmin'),
                'level' => 1,
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'Riskian',
                'username' => 'riskian',
                'password' => bcrypt('password123'),
                'level' => 2,
                'email' => 'riskia2n@gmail.com'
            ],
            [
                'name' => 'Ahmad Raze',
                'username' => 'razeraze',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'raze44@gmail.com'
            ],
            [
                'name' => 'Anshari Shaleh',
                'username' => 'shaleh',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'shaleh123@gmail.com'
            ],
            [
                'name' => 'Muhammad ',
                'username' => 'akbar321',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'akbar123@gmail.com'
            ],
            [
                'name' => 'Muhammad Erwin',
                'username' => 'irvineerwin',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'eruwin123@gmail.com'
            ],
            [
                'name' => 'Sakti Ahmad',
                'username' => 'sakti123',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'sakti123@gmail.com'
            ],
            [
                'name' => 'prasetyo',
                'username' => 'prasetyo',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'prasep@gmail.com'
            ],
            [
                'name' => 'Muhammad Rudi',
                'username' => 'rudi123',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'rudi2@gmail.com'
            ],
            [
                'name' => 'Ahmad Akba2',
                'username' => 'akbarahmad',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'ahmad123@gmail.com'
            ],
            [
                'name' => 'Muhammad Risky',
                'username' => 'riskimuhammad',
                'password' => bcrypt('password123'),
                'level' => 3,
                'email' => 'riski@gmail.com'
            ],
            
            
          ];     
        
          foreach($user as $key => $value){
            User::create($value);
          }
    }
}
