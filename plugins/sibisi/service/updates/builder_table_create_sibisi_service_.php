<?php namespace Sibisi\Service\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSibisiService extends Migration
{
    public function up()
    {
        Schema::create('sibisi_service_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('service_name')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sibisi_service_');
    }
}
