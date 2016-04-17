<?php namespace Smony\Expertandclient\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateExpertsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_expertandclient_experts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('full_name');
            $table->string('position');
            $table->string('vk');
            $table->string('fb');
            $table->string('in');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_expertandclient_experts');
    }

}
