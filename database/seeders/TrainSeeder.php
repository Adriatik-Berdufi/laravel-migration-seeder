<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;

        $train->id= 1;
        $train->company= "trenItalia";
        $train->departure_name= 'torino';
        $train->arrival_name= 'padova';
        $train->departure_time= '2024-03-22 09:01:01';
        $train->arrival_time= '2024-03-22 14:05:01';
        $train->train_code='AZ1923';
        $train->carroza_number= '3';
        $train->on_time= '1';
        $train->cancelled='0';
        $train->save();
    }
}
