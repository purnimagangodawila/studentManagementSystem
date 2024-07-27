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
        Schema::create('studentregs', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('register_date');
            $table->string('gardian');
            $table->integer('gardian_phone_number');
            $table->string('grade_id');
            $table->string('subject_id');
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
        Schema::dropIfExists('studentregs');
    }
};
