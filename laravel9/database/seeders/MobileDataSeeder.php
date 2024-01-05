<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MobileData; 


class MobileDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        MobileData::create([
            'Foto' => 'test_image_1.jpg',

        ]);


        // Add more test data as needed
    }
}