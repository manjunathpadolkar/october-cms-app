<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteGreenpaltformPlumbingpossibilitiesPages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_pages');
    }
    
    public function down()
    {
        Schema::create('greenpaltform_plumbingpossibilities_pages', function($table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->string('title', 255);
            $table->text('sub_title')->nullable();
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
