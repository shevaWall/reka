<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('list_items', function (Blueprint $table){
            $table->boolean('completed')->after('task_list_id')->default(0);
            $table->string('description')->after('name')->nullable();
            $table->string('file_preview')->after('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('list_items', function(Blueprint $table){
            $table->dropColumn('completed');
            $table->dropColumn('description');
            $table->dropColumn('file_preview');
        });
    }
};
