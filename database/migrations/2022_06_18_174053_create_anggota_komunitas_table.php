<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKomunitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_komunitas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->uuid('komunitas_uuid')->nullable();
            $table->uuid('biodata_uuid')->nullable();
            $table->boolean('is_approve')->default(FALSE);
            $table->timestamp('accepted_at')->nullable();
            $table->string('fsi_id',12)->nullable();
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
        Schema::dropIfExists('anggota_komunitas');
    }
}
