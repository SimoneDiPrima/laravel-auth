<?php
use App\User;
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
        $user = new User();
        $user->name = "Simone";
        $user->email = "diprima.simone@virgilio.it";
        $user->password = bcrypt("simone17");
        $user->save();

    }
}
