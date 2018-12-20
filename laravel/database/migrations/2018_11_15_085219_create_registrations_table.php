<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 100);
            $table->string( 'middlename', 10);
            $table->string('lastname',100);
            $table->string('username',100);
            $table->string('password',100);
            $table->boolean('skater');
            $table->string('skates');
            $table->string('email',100);
            $table->date('geboortedatum');
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
        Schema::dropIfExists('registrations');
    }
}
