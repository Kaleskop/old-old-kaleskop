<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {

 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up() {
  Schema::create( 'brands', function( Blueprint $table ) {
   $table->bigIncrements( 'id' );
   $table->unsignedInteger( 'business_id' )->index();
   $table->string( 'name' );
   $table->string( 'slug' )->index();
   $table->text( 'description' );
   $table->string( 'logo_path' )->nullable();
   $table->timestamps();
   $table->softDeletes();
  } );
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down() {
  Schema::dropIfExists( 'brands' );
 }
}
