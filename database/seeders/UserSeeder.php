<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add a record with Eloquent ORM
        $user = new User;
        $user->document = 75000001;
        $user->fullname = "Jeremias Springfield";
        $user->gender = "Male";
        $user->birthdate="1985-04-25";
        $user->photo = "jeremias.jpg";
        $user->phone = 3100000001;
        $user->email = "jeremias@gmail.com";
        $user->password = bcrypt('admin');
        $user->role = "Admin";
        $user->save();


        //Add a record Array
        DB::table('users')->insert([
            'document' => 75000002,
            'fullname' => 'John Wick',
            'gender'=> 'Male',
            'birthdate'=>'1985-04-25',
            'photo' => '1709301260.png',
            'phone' => '3100000002',
            'email' => 'jhonw@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => now()



        ]);
    }
}
