<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        
        Schema::create('tblpage', function (Blueprint $table) {
            $table->id();
            $table->string('PageType');
            $table->string('PageTitle');
            $table->text('PageDescription');
            $table->string('Email');
            $table->string('MobileNumber');
            $table->string('OpenningTime');
            $table->string('Address');
            $table->timestamps();
        });
    }

    public function down(): void{
        
        Schema::dropIfExists('tblpage');
    }
};
