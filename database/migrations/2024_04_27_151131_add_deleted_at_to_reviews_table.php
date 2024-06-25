<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->text('profile_url')->nullable();
            $table->double('rating', 15, 1)->default(0.0);
            $table->integer('number_of_reviews')->nullable();
            $table->date('review_date')->nullable();
            $table->string('person_name')->nullable();
            $table->text('rating_url')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->default('Customer');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
