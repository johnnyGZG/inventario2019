<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // Se crea el usuario admin
        $admin = new User();
        $admin->name = 'Administrador';
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt('123456');
        $admin->save();
    }
}
