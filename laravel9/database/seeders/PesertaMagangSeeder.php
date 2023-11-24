<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PesertaMagang;

class PesertaMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PesertaMagang::create([
            'nama' => 'Daffa Athala Z',
            'asal' => 'Las Vegas',
            'nohp' => '123456789',
        ]);
    }
}
