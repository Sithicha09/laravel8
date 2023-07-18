<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new-migration', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();
            $table->float('height',16,2)->nullable();
            $table->string('tell')->nullable();
            $table->date('date')->nullable();
            $table->text('Name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new-migration');
    }
}
