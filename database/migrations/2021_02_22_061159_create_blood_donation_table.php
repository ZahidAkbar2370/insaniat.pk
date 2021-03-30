<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donation', function (Blueprint $table) {
            $table->increments("id");
            $table->string('title');
            $table->string('detail');
            $table->string('hospital_name');
            $table->string('required_blood_group');
            $table->string('verified');
            $table->string('mobile_no');
            $table->string('whatsapp_no')->nullable();
            $table->enum('status', ['yes','no'])->default('no');
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
        Schema::dropIfExists('blood_donation');
    }
}
