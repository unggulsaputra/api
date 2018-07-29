<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile_nama_perusahaan');
            $table->string('profile_alamat_perusahaan');
            $table->string('profile_telp_perusahaan');
            $table->string('profile_fax_perusahaan');
            $table->string('profile_email_perusahaan');
            $table->string('profile_npwp_perusahaan');
            $table->string('kode_izin_usaha');
            $table->string('nomer_izin_usaha');
            $table->string('alamat_web');
            $table->string('nama_bank_satu');
            $table->string('nomer_rekening_satu');
            $table->string('atas_nama_satu');
            $table->string('nama_bank_dua');
            $table->string('nomer_rekening_dua');
            $table->string('atas_nama_dua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
