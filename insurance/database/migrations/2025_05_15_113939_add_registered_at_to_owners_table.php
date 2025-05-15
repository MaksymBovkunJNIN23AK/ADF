<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('owners', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->date('registered_at')->nullable()->after('address');
        });
    }

    public function down()
    {
        Schema::table('owners', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->dropColumn('registered_at');
        });
    }

};
