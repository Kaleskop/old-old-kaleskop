<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration {

 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up() {
  Schema::create( 'businesses', function( Blueprint $table ) {
   $table->bigIncrements( 'id' );
   $table->unsignedInteger( 'user_id' )->index();
   $table->string( 'country' );
   $table->string( 'name' );
   $table->string( 'email' )->unique()->index();
   $table->string( 'vat' )->unique()->index();
   $table->string( 'address_line1' );
   $table->string( 'city' );
   $table->string( 'cap' );

   $table->string( 'stripe_id' )->nullable()->collation( 'utf8mb4_bin' );
   $table->string( 'card_brand' )->nullable();
   $table->string( 'card_last_four', 4 )->nullable();
   $table->timestamp( 'trial_ends_at' )->nullable();

   $table->timestamps();
  } );
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down() {
  Schema::dropIfExists( 'businesses' );
 }
}
