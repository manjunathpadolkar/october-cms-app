<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesPages extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_pages', function($table)
        {
            $table->bigInteger('id')->unsigned();
            $table->string('title', 255);
            $table->text('sub_title')->nullable();
            $table->text('content');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_pages');
    }
}
