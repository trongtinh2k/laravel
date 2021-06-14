<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntershipDiaryWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intership_diary_weeks', function (Blueprint $table) {
            $table->integer('intership_diary_week_id'); 
            $table->string('intership_diary_week',100); 
            $table->integer('student_id',false);
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
        Schema::dropIfExists('intership_diary_weeks');
    }
}
