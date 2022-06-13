<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->uuid('user_uuid');
            $table->string('fullname',250);
            $table->string('nickname',50)->nullable();
            $table->string('no_hp',14)->nullable();
            $table->string('birth_place',50)->nullable();
            $table->date('birth_day')->nullable();
            $table->string('province_id',10)->nullable();
            $table->string('city_id',10)->nullable();
            $table->string('domisili')->nullable();
            $table->string('gender',25)->nullable();
            $table->string('blood',4)->nullable();
            $table->uuid('jenis_motor')->nullable();
            $table->string('no_rangka',25)->nullable();
            $table->string('no_mesin',25)->nullable();
            $table->string('no_sim',25)->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
