<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorTable extends Migration {

 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up() {
  Schema::create( 'sponsor', function( Blueprint $table ) {
   $table->unsignedInteger( 'brand_id' )->index();
   $table->unsignedInteger( 'adv_id' )->index();
   $table->timestamps();
  } );
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down() {
  Schema::dropIfExists( 'sponsor' );
 }
}
