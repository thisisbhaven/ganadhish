<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBappasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bappas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('competition');
            $table->string('email');
            $table->string('address');
            $table->string('pincode');
            $table->string('person');
            $table->string('mobile');
            $table->string('status')->default('Not Approved');
            $table->integer('votes')->default(0);
            $table->integer('pc')->default(0);
            $table->timestamps();
        });

        DB::update("ALTER TABLE bappas AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bappas');
    }
}
