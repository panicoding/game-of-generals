<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoldierIdConstrainedColumnOnBattleFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('battle_fields', function (Blueprint $table) {
            $table->unsignedBigInteger('soldier_id')->nullable()->after('battle_id');
            $table->foreign('soldier_id')->references('id')->on('soldiers')->onDelete('set null');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('battle_fields', function (Blueprint $table) {
            $table->dropForeign('soldier_id');
            $table->dropSoftDeletes();
        });
    }
}
