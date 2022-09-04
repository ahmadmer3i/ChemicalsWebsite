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
        Schema::create('product_sub_category_lists', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('product_sub_categories')
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
        Schema::dropIfExists('product_sub_category_lists');
    }
};
