<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('company_id'); 
            $table->string('company_name',100);
            $table->string('company_web',100);
            $table->string('company_address',100);
            $table->string('company_code',100);
            $table->string('company_phone',100);
            $table->integer('category_id',false);
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
        Schema::dropIfExists('companies');
    }
}
