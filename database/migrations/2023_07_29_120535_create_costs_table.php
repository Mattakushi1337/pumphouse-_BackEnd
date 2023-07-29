<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->integer('period_id');
            $table->float('water_cost');
            $table->foreign('period_id')
                ->references('id')->on('periods');
        });
    }

    public function down()
    {
        Schema::dropIfExists('costs');
    }
}