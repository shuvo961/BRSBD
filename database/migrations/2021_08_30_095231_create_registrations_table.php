<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('division');
            $table->string('district');
            $table->string('upazila');
            $table->string('fname');
            $table->string('lname');
            $table->string('fullname');
            $table->string('gender');
            $table->string('bdate');
            $table->string('father');
            $table->string('fnationality');
            $table->string('fnid');
            $table->string('mother');
            $table->string('mnationality');
            $table->string('mnid');
            $table->string('presaddress');
            $table->string('peraddress');
            $table->integer('status')->default(0);
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
