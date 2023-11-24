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
        Schema::table('homes', function (Blueprint $table) {
            $table->string('icon_1');; 
            $table->string('icon_title_1');
            $table->string('icon_2') ;
            $table->string('icon_title_2') ;
            $table->string('icon_3') ;
            $table->string('icon_title_3');
            $table->string('icon_4') ;
            $table->string('icon_title_4') ;
            $table->string('icon_5');
            $table->string('icon_title_5') ;
            $table->string('icon_6');
            $table->string('icon_title_6') ;
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homes', function (Blueprint $table) {
            //
        });
    }
};
