<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScolarshipMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scolarship_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('school')->nullable();
            $table->string('average')->nullable();
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
        Schema::dropIfExists('scolarship_members');
    }
}
