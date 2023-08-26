<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments12 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->string('timezone')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->dropColumn('timezone');
        });
    }
}
