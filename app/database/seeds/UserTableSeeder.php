<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name='Félix Méndez';
        $user->password = '12345678';
        $user->email = "pfmata01@gmail.com";
        $user->save();
    }
}
