<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionPenitipansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_penitipans', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('animal_name');
            $table->string('animal_type');
            $table->string('descendants');
            $table->string('animal_gender');
            $table->text('note');
            $table->string('penitipan_photo_path', 2048)->nullable();

            $table->string('tanggal_pengembalian');

            $table->text('payment_url');

            $table->string('status');
            $table->string('sub_total');
            $table->string('shipping_cost');
            $table->string('discount');
            $table->integer('total');




            $table->softDeletes();
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
        Schema::dropIfExists('transaction_penitipans');
    }
}
