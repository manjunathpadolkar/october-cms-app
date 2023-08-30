<?php

namespace GreenPaltform\PlumbingPossibilities\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableAddPhoneColumnToBackendUsers extends Migration
{
    public function up()
    {
        Schema::table('backend_users', function ($table) {
            $table->string('phone')->nullable();
        });
    }

    public function down()
    {
        Schema::table('backend_users', function (Blueprint $table) {
            if (Schema::hasColumn("backend_users", "phone")) {
                $table->dropColumn("phone");
            }
        });
    }
}
