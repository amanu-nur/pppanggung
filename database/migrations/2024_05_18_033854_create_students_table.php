<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('placeofbirth');
            $table->string('dateofbirth');
            $table->string('citizenship')->default('WNI');
            $table->string('religion')->default('Islam');
            $table->string('education');
            $table->string('work');
            $table->string('maritalstatus');
            $table->string('nik');
            $table->string('address');
            $table->string('datemail');
            $table->string('nomail');
            $table->string('earlyentry');
            $table->string('qrid');
            $table->string('gender');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
