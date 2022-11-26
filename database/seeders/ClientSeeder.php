<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client-> name = "Angel Iran";
        $client-> lastname = "Solis Olguin";
        $client-> email = "asolis_19@alu.uabcs.mx";
        $client-> phone = "6121311212";
        $client->save();

        $client = new Client();
        $client-> name = "Daniel Alberto";
        $client-> lastname = "Rosas Zamago";
        $client-> email = "drosas_19@alu.uabcs.mx";
        $client-> phone = "6122722211";
        $client->save();

        $client = new Client();
        $client-> name = "David Alonso";
        $client-> lastname = "Estrada Gudfeis";
        $client-> email = "destrada_19@alu.uabcs.mx";
        $client-> phone = "61232115463";
        $client->save();

        $client = new Client();
        $client-> name = "Angel";
        $client-> lastname = "Duarte Amador";
        $client-> email = "aduarte_19@alu.uabcs.mx";
        $client-> phone = "6121327676";
        $client->save();

        $client = new Client();
        $client-> name = "Alan";
        $client-> lastname = "Gonzales De la llave Achoy";
        $client-> email = "agonzales_19@alu.uabcs.mx";
        $client-> phone = "6127373329";
        $client->save();
    }
}
