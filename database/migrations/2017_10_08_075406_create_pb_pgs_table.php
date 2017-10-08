<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePbPgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pb_pgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',20);
            $table->dateTime('birthday');
            $table->string('address',100)->nullable();
            $table->string('email',50)->unique();
            $table->string('mobile',15);
            $table->text('description');
            $table->string('profile_picture');
            $table->text('images')->nullable();
            $table->double('height',5,2);
            $table->double('weight',5,2);
            $table->integer('user_id');
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
        Schema::dropIfExists('pb_pgs');
    }
}
