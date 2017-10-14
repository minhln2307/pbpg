<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name', 50);
            $table->string('address', 100)->nullable();
            $table->text('about')nullable();
            $table->integer('user_id');
            $table->string('mobile',13)->nullable();
            $table->string('email', 50)->unique();
=======
            $table->string('name',20);
            $table->string('address',100)->nullable();
            $table->text('about');
            $table->integer('user_id');
            $table->string('mobile',13);
            $table->string('email',50)->unique();
>>>>>>> 6dc71ed8265afda0001648a6dec1b25c3f1bff82
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
        Schema::dropIfExists('companies');
    }
}
