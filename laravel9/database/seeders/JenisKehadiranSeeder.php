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
            ['jenis kehadiran' => 'Tepat Waktu'],
            ['jenis kehadiran' => 'Terlambat'],
            ['jenis kehadiran' => 'Tidak Masuk'],
        ];
        foreach ($jenisKehadiranData as $data) {
            JenisKehadiran::create($data);
    }
}
}