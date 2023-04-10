<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('cars', function (Blueprint $table) {
            $table->id();
//            $table->bigInteger('car_id');
            $table->string('owner_name');
            $table->string('number_type');
            $table->text('car_weight1')->nullable();
            // $table->string('car_weight2')->nullable();
            // $table->string('car_weight3')->nullable();
            $table->bigInteger('car_number');
            $table->string('car_letter');
            $table->string('government_car');
            $table->string('document_number')->nullable();
            $table->string('mobile')->nullable();
            $table->string('car_type');
            $table->bigInteger('family_number');
            $table->string('government_name');
            $table->bigInteger('id_card_number');
            $table->bigInteger('resident_number');
            $table->string('document_front_photo');
            $table->string('document_back_photo');
            $table->string('id_card_photo');
            $table->string('id_card_photo2');
            $table->string('car_photo');
            $table->string('resident_card_photo');
            $table->string('resident_card_photo2');
            $table->text('notes')->nullable();
            $table->boolean('active_state')->default(false);
            $table->bigInteger('generate_code')->nullable();
            $table->string('random_code')->unique();
            $table->foreignId('user_id')->nullable();
            $table->string('user_name')->nullable();

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
        Schema::dropIfExists('cars');
    }
};
