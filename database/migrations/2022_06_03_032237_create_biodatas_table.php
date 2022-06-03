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
            $table->string('no_hp',14);
            $table->string('birth_place',50);
            $table->date('birth_day');
            $table->string('province_id',2);
            $table->string('city_id',3);
            $table->string('domisili');
            $table->string('gender',25);
            $table->string('blood',2);
            $table->string('jenis_motor',25);
            $table->string('no_rangka',20);
            $table->string('no_mesin',15);
            $table->string('no_sim',15);
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
