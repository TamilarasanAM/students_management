<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('rollnumber', 15);
            $table->string('email', 100);
            $table->string('class', 100);
            $table->string('department', 100);
            $table->date('dob');
            $table->string('gender', 100);
            $table->text('address');
            $table->string('state', 100);
            $table->string('parentname', 100);
            $table->string('parentmobile', 10);
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
        Schema::dropIfExists('students');
    }
};
