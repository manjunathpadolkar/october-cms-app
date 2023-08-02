<?php namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGreenpaltformPlumbingpossibilitiesPages2 extends Migration
{
    public function up()
    {
        Schema::table('greenpaltform_plumbingpossibilities_pages', function($table)
        {
            $table->bigIncrements('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('greenpaltform_plumbingpossibilities_pages', function($table)
        {
            $table->bigInteger('id')->change();
        });
    }
}
