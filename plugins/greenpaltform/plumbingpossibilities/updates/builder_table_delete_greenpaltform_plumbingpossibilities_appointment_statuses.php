<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteGreenpaltformPlumbingpossibilitiesAppointmentStatuses extends Migration
{
    public function up()
    {
        Schema::dropIfExists('greenpaltform_plumbingpossibilities_appointment_statuses');
    }
    
    public function down()
    {
        Schema::create('greenpaltform_plumbingpossibilities_appointment_statuses', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
