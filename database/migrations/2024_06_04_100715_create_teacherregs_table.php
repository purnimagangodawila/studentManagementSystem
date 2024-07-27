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
        Schema::create('teacherregs', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('subject_id');
            $table->string('grade_id');
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
        Schema::dropIfExists('teacherregs');
    }
};
