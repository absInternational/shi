<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->boolean('available_at_auction')->default(0);
            $table->string('link')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('trailer_type');
            $table->string('condition');
            $table->boolean('modification')->default(0)->nullable();
            $table->string('modify_info')->nullable();
            $table->string('image')->nullable();
            $table->string('origin');
            $table->string('origin_zip')->nullable();
            $table->string('origin_state')->nullable();
            $table->string('origin_city')->nullable();
            $table->string('destination');
            $table->string('destination_zip')->nullable();
            $table->string('destination_state')->nullable();
            $table->string('destination_city')->nullable();
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
        Schema::dropIfExists('quotes');
    }
}
