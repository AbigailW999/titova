<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateMessageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('message',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("contact");
            $table->text("description")->nullable();
            $table->string("picture")->nullable();
            $table->integer("photo_id")->references("id")->on("photo")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message');
    }

}