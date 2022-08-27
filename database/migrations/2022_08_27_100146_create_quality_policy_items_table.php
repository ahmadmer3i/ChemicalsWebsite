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
        Schema::create('quality_policy_items', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable();
            $table->unsignedBigInteger('quality_id')->nullable();
            $table->foreign('quality_id')
                ->references('id')
                ->on('quality_policies')
                ->onDelete('cascade');
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
        Schema::dropIfExists('quality_policy_items');
    }
};
