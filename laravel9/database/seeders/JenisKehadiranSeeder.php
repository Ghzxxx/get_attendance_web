<?php

namespace Database\Seeders;

use App\Models\JenisKehadiran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKehadiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisKehadiranData = [
            ['jenis kehairan' => 'Tepat Waktu'],
            ['jenis kehairan' => 'Terlambat'],
            ['jenis kehairan' => 'Tidak Masuk'],
        ];
        foreach ($jenisKehadiranData as $data) {
            JenisKehadiran::create($data);
    }
}
}