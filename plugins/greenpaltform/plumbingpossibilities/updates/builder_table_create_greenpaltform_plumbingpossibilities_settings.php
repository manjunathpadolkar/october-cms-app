<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesSettings extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_settings', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('key');
            $table->string('value');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_settings');
    }
}
