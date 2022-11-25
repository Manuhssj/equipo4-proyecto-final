<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = "Manuel Alejandro";
        $user->lastname = "Diaz Hernandez";
        $user->phone = "6121316096";
        $user->email = "mdiaz_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = Hash::make("contraseñamanu");
        $user->save();


        $user2 = new User();
        $user2->name = "Diego";
        $user2->lastname = "Ochoa";
        $user2->phone = "6123327722";
        $user2->email = "dochoa_19@alu.uabcs.mx";
        $user2->avatar = "";
        $user2->rol ="Administrador";
        $user2->password = Hash::make("contraseñadiego");
        $user2->save();

        $user3 = new User();
        $user3->name = "Enrique";
        $user3->lastname = "God";
        $user3->phone = "6121223131";
        $user3->email = "egod_19@alu.uabcs.mx";
        $user3->avatar = "";
        $user3->rol ="Administrador";
        $user3->password = Hash::make("contraseñakime");
        $user3->save();

        $user4 = new User();
        $user4->name = "Francisco";
        $user4->lastname = "Diaz";
        $user4->phone = "6121332241";
        $user4->email = "fidaz_19@alu.uabcs.mx";
        $user4->avatar = "";
        $user4->rol ="Administrador";
        $user4->password = Hash::make("contraseñafrank");
        $user4->save();
        
    }
}
