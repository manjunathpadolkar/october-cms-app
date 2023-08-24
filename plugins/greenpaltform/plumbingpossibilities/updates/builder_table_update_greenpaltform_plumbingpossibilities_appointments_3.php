<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments3 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->renameColumn('appointment_status', 'status');
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->renameColumn('status', 'appointment_status');
        });
    }
}
