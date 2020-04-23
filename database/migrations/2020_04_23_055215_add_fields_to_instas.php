<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToInstas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instas', function (Blueprint $table) {
            $table->string('insta_id')->nullable(); 
            $table->string('insta_limit')->nullable(); 
            $table->string('insta_design')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instas', function (Blueprint $table) {
            $table->dropColumn(['insta_id','insta_limit','insta_design']); 
        });
    }
}
