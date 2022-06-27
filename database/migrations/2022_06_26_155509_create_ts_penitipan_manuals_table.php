<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTsPenitipanManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_penitipan_manuals', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name')->nullable();
            $table->string('animal_type')->nullable();
            $table->string('animal_gender')->nullable();
            $table->string('animal_color')->nullable();
            $table->string('tanggal_pengembalian')->nullable();
            $table->text('note')->nullable();
            $table->integer('price')->nullable();

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
        Schema::dropIfExists('ts_penitipan_manuals');
    }
}
