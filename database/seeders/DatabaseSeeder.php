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


        $user = new User();
        $user->name = "Diego";
        $user->lastname = "Ochoa";
        $user->phone = "6123327722";
        $user->email = "dochoa_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = Hash::make("contraseñadiego");
        $user->save();

        $user = new User();
        $user->name = "Enrique";
        $user->lastname = "God";
        $user->phone = "6121223131";
        $user->email = "egod_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = Hash::make("contraseñakime");
        $user->save();

        $user = new User();
        $user->name = "Francisco";
        $user->lastname = "Diaz";
        $user->phone = "6121332241";
        $user->email = "fdiaz_19@alu.uabcs.mx";
        $user->avatar = "";
        $user->rol ="Administrador";
        $user->password = Hash::make("contraseñafrank");
        $user->save();
        
        $this->call(ClientSeeder::class);
    }
}
