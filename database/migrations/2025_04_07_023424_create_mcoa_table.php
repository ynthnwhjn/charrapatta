<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcoaTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('mcoa', function (Blueprint $table) {
         $table->id();
         $table->foreignId('parent_id')->nullable();
         $table->string('path');
         $table->string('kode');
         $table->string('nama');
         $table->string('tipe')->nullable();
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
      Schema::dropIfExists('mcoa');
   }
}
