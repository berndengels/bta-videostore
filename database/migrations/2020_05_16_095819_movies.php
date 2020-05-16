<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->foreignId('author_id')
                ->unsigned()
                ->references('id')
                ->on('authors')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;
            $table->string('title', 100);
            $table->unsignedDecimal('price');
            $table->timestamps();
            $table->index(['author_id','title','price']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
