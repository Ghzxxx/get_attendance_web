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
        $data = [
            [
                'nama' => 'Daffa Athala Z',
                'asal' => 'Las Vegas',
                'nohp' => '123456789',
            ],
            [
                'nama' => 'Bagus Daffa F',
                'asal' => 'New York',
                'nohp' => '987654321',
            ],
            [
                'nama' => 'Ipong Slebew',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'ika',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'uro',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'belo',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'sese',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'cika',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'rar',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'nun',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'gaaff',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],
            [
                'nama' => 'jerr',
                'asal' => 'Zibabwe',
                'nohp' => '123134123',
            ],





        ];

        foreach ($data as $item) {
            PesertaMagang::create($item);
    }
}
}