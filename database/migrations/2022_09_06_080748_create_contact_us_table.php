<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('address_title')->nullable();
            $table->text('address')->nullable();
            $table->string('email_title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_title')->nullable();
            $table->string('phone')->nullable();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
            $table->string('form_title')->nullable();
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
        Schema::dropIfExists('contact_us');
    }
};
