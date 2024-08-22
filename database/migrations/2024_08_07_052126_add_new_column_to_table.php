<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('0001_01_01_000000_create_users_table', function (Blueprint $table) {
            $table->string('usertype')->default(0);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            $table->dropColumn('new_column');
        });
    }
}
