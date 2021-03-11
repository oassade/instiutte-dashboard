<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string("ar_firstName");
            $table->string("ar_secondName");
            $table->string("ar_familyName");
            $table->string("en_firstName");
            $table->string("en_secondName");
            $table->string("en_familyName");
            $table->string("birthday");
            $table->string("city");
            $table->string("country");
            $table->string("nationality");
            $table->string("adress");
            $table->string("phone");
            $table->string("email");
            $table->string("diploma");
            $table->string("diploma-country");
            $table->string("speciality");
            $table->string("doctorat-adress");
            $table->string("doctorat-file");
            $table->string("passport");
            $table->string("picture");
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
        Schema::dropIfExists('registers');
    }
}
