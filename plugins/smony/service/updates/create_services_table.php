<?php namespace Smony\Service\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{

    public function up()
    {
        Schema::create('smony_service_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('min_text');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_service_services');
    }

}
