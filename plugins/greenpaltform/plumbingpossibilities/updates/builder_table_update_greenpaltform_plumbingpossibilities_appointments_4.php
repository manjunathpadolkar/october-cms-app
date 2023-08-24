<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments4 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->renameColumn('assigned_to_id', 'assigned_id');
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->renameColumn('assigned_id', 'assigned_to_id');
        });
    }
}
