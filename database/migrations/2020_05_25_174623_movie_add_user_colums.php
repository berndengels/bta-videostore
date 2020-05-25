<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovieAddUserColums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->addColumn('integer','created_by')
                ->unsigned()
                ->nullable()
                ->default(null)
                ->index()
            ;
            $table->addColumn('integer','updated_by')
                ->unsigned()
                ->nullable()
                ->default(null)
                ->index()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->removeColumn('created_by');
            $table->removeColumn('updated_by');
        });
    }
}
