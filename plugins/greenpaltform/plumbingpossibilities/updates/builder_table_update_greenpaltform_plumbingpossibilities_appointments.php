<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments extends Migration
{
    public function up()
    {
        Schema::rename('greenpaltform_plumbingpossibilities_', 'greenpaltform_plumbingpossibilities_appointments');
    }
    
    public function down()
    {
        Schema::rename('greenpaltform_plumbingpossibilities_appointments', 'greenpaltform_plumbingpossibilities_');
    }
}
