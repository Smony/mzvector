<?php namespace Smony\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_contact_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('vk');
            $table->string('fb');
            $table->string('in');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_contact_contacts');
    }

}
