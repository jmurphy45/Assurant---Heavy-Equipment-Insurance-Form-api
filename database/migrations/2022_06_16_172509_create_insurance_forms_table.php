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
        Schema::create('insurance_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->unsignedBigInteger('industries_id');
            $table->unsignedBigInteger('purchase_types_id');
            $table->unsignedBigInteger('product_types_id');
            $table->unsignedBigInteger('price_ranges_id');
            $table->tinyInteger('approved')->default(0);
            $table->timestamps();

            $table->foreign('industries_id')->references('id')->on('industries');
            $table->foreign('purchase_types_id')->references('id')->on('purchase_types');
            $table->foreign('product_types_id')->references('id')->on('product_types');
            $table->foreign('price_ranges_id')->references('id')->on('price_ranges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_forms');
    }
};
