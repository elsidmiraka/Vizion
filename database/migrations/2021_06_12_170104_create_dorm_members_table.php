<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDormMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorm_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('scolarship')->nullable();
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('dorm_members');
    }
}
