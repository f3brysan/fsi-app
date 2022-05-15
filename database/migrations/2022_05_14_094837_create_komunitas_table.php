<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateKomunitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->string('nama',100);
            $table->string('slug',100);
            $table->string('singkatan',25);
            $table->date('tgl_berdiri')->nullable();
            $table->string('picture')->nullable();
            $table->text('content')->nullable();
            $table->foreignUuid('regional_id');
            $table->boolean('is_accepted')->default(false);
            $table->timestamp('accepted_at')->nullable();
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
        Schema::dropIfExists('komunitas');
    }
}
