<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD
class CreateJobsTable extends Migration
=======
class CreateJogsTable extends Migration
>>>>>>> 6dc71ed8265afda0001648a6dec1b25c3f1bff82
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->text('title', 100);
            $table->text('description', 100);
            $table->string('address',100)->nullable();
            $table->text('salary');
=======
            $table->string('title',100);
            $table->text('description');
            $table->string('address',100)->nullable();
            $table->string('salary',20);
>>>>>>> 6dc71ed8265afda0001648a6dec1b25c3f1bff82
            $table->timestamp('time');
            $table->integer('company_id');
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
        Schema::dropIfExists('jobs');
    }
}
