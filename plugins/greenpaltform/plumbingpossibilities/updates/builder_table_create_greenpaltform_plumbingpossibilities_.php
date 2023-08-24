<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilities extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('assigned_to_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->bigInteger('appointment_status_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_');
    }
}
