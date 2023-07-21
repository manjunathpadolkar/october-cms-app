<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesOurServices extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_our_services', function($table)
        {
            $table->bigInteger('id')->unsigned();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('icon_url', 255)->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_our_services');
    }
}
