<?php namespace Smony\Expertandclient\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateClientsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_expertandclient_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_expertandclient_clients');
    }

}
