<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryDaysOfWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_days_of_weeks', function (Blueprint $table) {
            $table->integer('diary_days_of_week_id'); 
            $table->string('diary_days_of_week_description',100); 
            $table->string('diary_days_of_week_date',100);
            $table->integer('intership_diary_week_id',false);
            $table->timestamp('create_add')->nullable();
            $table->timestamp('update_at')->nullable();
            $table->timestamp('delet_at')->nullable();
            $table->integer('status',false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_days_of_weeks');
    }
}
