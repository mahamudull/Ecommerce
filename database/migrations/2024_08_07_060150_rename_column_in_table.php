
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            $table->renameColumn('old_column', 'new_column');
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
            $table->renameColumn('new_column', 'old_column');
        });
    }
}
