<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user->name = "Manuel Alejandro";
        $user->lastname = "Diaz Hernandez";
        $user->phone = "6121316096";
        $user->email = "mdiaz_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = bcrypt("contraseñamanu");
        $user->save();


        $user = new User();
        $user->name = "Diego";
        $user->lastname = "Ochoa";
        $user->phone = "6123327722";
        $user->email = "dochoa_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = bcrypt("contraseñadiego");
        $user->save();

        $user = new User();
        $user->name = "Enrique";
        $user->lastname = "God";
        $user->phone = "6121223131";
        $user->email = "egod_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = bcrypt("contraseñakime");
        $user->save();

        $user = new User();
        $user->name = "Francisco";
        $user->lastname = "Diaz";
        $user->phone = "6121332241";
        $user->email = "fdiaz_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = bcrypt("contraseñafrank");
        $user->save();
    }
}
