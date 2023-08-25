<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesCountries extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_countries', function($table)
        {
            $table->increments('id')->unsigned();
            $table->bigInteger('order');
            $table->string('code', 2);
            $table->string('name');
            $table->string('currency_code', 3)->nullable();
            $table->string('fips_code', 2)->nullable();
            $table->string('iso_numeric', 4)->nullable();
            $table->string('north', 30)->nullable();
            $table->string('south', 30)->nullable();
            $table->string('east', 30)->nullable();
            $table->string('west', 30)->nullable();
            $table->string('capital', 30)->nullable();
            $table->string('continent', 100)->nullable();
            $table->string('continent_code', 2)->nullable();
            $table->string('languages')->nullable();
            $table->string('iso_alpha_3', 3)->nullable();
            $table->bigInteger('geoname_id')->nullable();
            $table->string('phonecode')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_countries');
    }
}
