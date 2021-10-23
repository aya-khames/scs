<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
           /* $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name')->unique();
            $table->string('position');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();*/
            $table->index('IDClient');
            $table->string('Name_C');
            $table->string('ID_C');
            $table->unique('Address');
            $table->string('Tel1');
            $table->string('Mobile1');
            $table->string('Fax_C');
            $table->string('E_mail');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
