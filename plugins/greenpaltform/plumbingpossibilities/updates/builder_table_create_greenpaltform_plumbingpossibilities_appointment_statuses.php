<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGreenpaltformPlumbingpossibilitiesAppointmentStatuses extends Migration
{
    public function up()
    {
        Schema::create('greenpaltform_plumbingpossibilities_appointment_statuses', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('status')->default(true);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_appointment_statuses');
    }
}
