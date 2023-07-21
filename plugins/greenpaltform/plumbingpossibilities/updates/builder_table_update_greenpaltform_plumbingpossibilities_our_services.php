<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesOurServices extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_our_services', function($table)
        {
            $table->boolean('status')->default(true);
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_our_services', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
