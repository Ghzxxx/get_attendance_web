<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER after_mobile_data_insert
    AFTER INSERT ON mobile_data FOR EACH ROW
    BEGIN
        DECLARE peserta_magang_nama VARCHAR(255); 
    DECLARE peserta_magang_asal VARCHAR(255);

    SELECT nama, asal INTO peserta_magang_nama, peserta_magang_asal
    FROM peserta_magang
    WHERE id = NEW.absensi_peserta_magang_id;

    IF peserta_magang_nama IS NOT NULL AND peserta_magang_asal IS NOT NULL THEN
        INSERT INTO absensi_peserta_magang (nama, asal, foto, created_at)
        VALUES (peserta_magang_nama, peserta_magang_asal, NEW.foto, NEW.created_at);
    END IF;
    END
');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_mobile_data_insert');
    }
};
