<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hastable('news')){
            Schema::dropIfExists('news');
        };
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num',20);
            $table->string('class_id',64);
            $table->string('class_name');
            $table->string('stu_id');
            $table->string('stu_name');
            $table->string('stu_nation');
            $table->string('stu_sex');
            $table->string('stu_birth');
            $table->string('stu_source');
            $table->string('stu_identity');
            $table->string('stu_address');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
