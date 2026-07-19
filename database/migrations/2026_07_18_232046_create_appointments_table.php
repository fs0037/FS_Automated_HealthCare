<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctorId');
            $table->unsignedBigInteger('userId');
            $table->string('doctorSpecialization');
            $table->date('appointmentDate');
            $table->string('appointmentTime');
            $table->integer('userStatus')->default(1);
            $table->integer('doctorStatus')->default(1);
            $table->string('postingDate')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
