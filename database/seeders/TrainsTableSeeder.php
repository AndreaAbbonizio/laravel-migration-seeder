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
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->words(2, true);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-10 days', '+2 month')->format('Y-m-d H:i:s');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-10 days', '+2 month')->format('Y-m-d H:i:s');
            $newTrain->codice_treno = $faker->regexify('[A-Z]{2}[0-4]{2}');
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();


            $newTrain->save();
        }
    }
}
