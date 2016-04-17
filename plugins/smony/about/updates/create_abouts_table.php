<?php namespace Smony\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAboutsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_about_abouts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('text_muted');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_about_abouts');
    }

}
