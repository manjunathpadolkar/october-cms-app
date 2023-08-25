<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesAddresses extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_addresses', function($table)
        {
            $table->increments('id')->unsigned();
            $table->bigInteger('client_id')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->bigInteger('province_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_addresses');
    }
}
