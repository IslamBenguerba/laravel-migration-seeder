<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i=0; $i<10;$i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->name;
            $newTrain->stazione_di_servizio = $faker->name;
            $newTrain->oraio_di_partenza = $faker->time();
            $newTrain->oraio_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(4);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data_di_partenza = $faker->dateTimeInInterval('-7 days','+14 days',);
            $newTrain->save();

        }
    }
}
