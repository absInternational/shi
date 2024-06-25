<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('heading_one');
            $table->text('desc_one');
            $table->string('heading_two');
            $table->text('desc_two_one');
            $table->text('desc_two_two');
            $table->text('desc_two_three');
            $table->text('desc_two_four');
            $table->text('desc_two_five');
            $table->text('desc_two_six');
            $table->text('extra')->nullable();
            $table->integer('status')->default(1);
            $table->bigInteger('category_id');
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
        Schema::dropIfExists('services');
    }
}
