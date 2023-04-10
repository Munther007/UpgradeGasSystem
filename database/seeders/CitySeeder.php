<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate([
            'country_id'=> Country::where('slug','IQ')->first()->id,
            'name'=>'بغداد',
            'slug'=>'Baghdad',
        ]);
    }
}
