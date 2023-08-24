<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesAppointments8 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->bigInteger('client_id')->nullable()->change();
            $table->date('date')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_appointments', function($table)
        {
            $table->bigInteger('client_id')->nullable(false)->change();
            $table->date('date')->nullable()->change();
        });
    }
}
