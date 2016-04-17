<?php namespace Smony\Head\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateHeadsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_head_heads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('text_one');
            $table->string('text_two');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_head_heads');
    }

}
