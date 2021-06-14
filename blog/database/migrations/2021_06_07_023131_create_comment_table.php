<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->integer('comment_id');
            $table->string('rating',100); 
            $table->string('comment',100); 
            $table->integer('user_id',false);
            $table->integer('diary_days_of_week_id',false);
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
        Schema::dropIfExists('comment');
    }
}
