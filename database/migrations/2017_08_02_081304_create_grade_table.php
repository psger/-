<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    if(Schema::hastable('grade')){
        Schema::dropIfExists('grade');
    }
        Schema::create('grade', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stu_id',30)->unique();
            $table->float('height',5,2);
            $table->float('weight',5,2);
            $table->string('gas',20);
            $table->float('fm',3,2);
            $table->float('jump',3,2);
            $table->string('sit_flexion',20);
            $table->float('em',3,2);
            $table->string('sit_ups',10);
            $table->string('bodyup',10);
            $table->float('left_eye',2,1);
            $table->float('right_eye',2,1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('grade');
    }
}
