<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        $trainFile = fopen(__DIR__ . '/../trains.csv', 'r');

        $trainCSV = fgetcsv($trainFile);

        $trainCSV = fgetcsv($trainFile);

        while ($trainCSV != false) {
            $newTrain = new Train();

            $newTrain->azienda = $trainCSV[0];
            $newTrain->stazione_di_partenza = $trainCSV[1];
            $newTrain->stazione_di_arrivo = $trainCSV[2];
            $newTrain->orario_di_partenza = $trainCSV[3];
            $newTrain->orario_di_arrivo = $trainCSV[4];
            $newTrain->codice_treno = $trainCSV[5];
            $newTrain->numero_carrozze = $trainCSV[6];
            $newTrain->in_orario = $trainCSV[7];
            $newTrain->cancellato = $trainCSV[8];




            $newTrain->save();

            $trainCSV = fgetcsv($trainFile);
        }

        // for ($i = 0; $i < 10; $i++) {
        //     $newTrain = new Train();


        //     $newTrain->azienda = $faker->words(2, true);
        //     $newTrain->stazione_di_partenza = $faker->city();
        //     $newTrain->stazione_di_arrivo = $faker->city();
        //     $newTrain->orario_di_partenza = $faker->dateTimeBetween('-10 days', '+2 month')->format('Y-m-d H:i:s');
        //     $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-10 days', '+2 month')->format('Y-m-d H:i:s');
        //     $newTrain->codice_treno = $faker->regexify('[A-Z]{2}[0-4]{2}');
        //     $newTrain->in_orario = $faker->boolean();
        //     $newTrain->cancellato = $faker->boolean();


        //     $newTrain->save();
        // }
    }
}
