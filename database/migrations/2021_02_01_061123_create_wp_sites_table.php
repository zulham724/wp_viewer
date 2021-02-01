<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wp_category_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('url');
            $table->timestamps();

            $table->foreign('wp_category_id')->references('id')->on('wp_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wp_sites');
    }
}
