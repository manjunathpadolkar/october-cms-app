<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesProvinces extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_provinces', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->bigInteger('country_id')->nullable();
            $table->double('tax_percentage', 5, 2)->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_provinces');
    }
}
