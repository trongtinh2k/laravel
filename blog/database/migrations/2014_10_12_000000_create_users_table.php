<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id'); 
            $table->string('user_mail',100);
            $table->string('user_password',100);
            $table->string('user_avatar',100); 
            $table->integer('types_id',false);
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
        Schema::dropIfExists('users');
    }
}
