<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments2 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->text('appointment_status')->nullable();
            $table->dropColumn('appointment_status_id');
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->dropColumn('appointment_status');
            $table->bigInteger('appointment_status_id')->nullable();
        });
    }
}
