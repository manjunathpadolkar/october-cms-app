<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesClients extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_clients', function($table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_clients');
    }
}
