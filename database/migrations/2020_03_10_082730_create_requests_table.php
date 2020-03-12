<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('auto_id')->default(0);

            $table->string('type', 32)->default('');
            $table->index('type');

            $table->string('fio')->default('');
            $table->string('email')->default('');
            $table->string('phone', 32)->default('');
            $table->string('mark')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('price')->nullable();
            $table->string('advance')->nullable();
            $table->string('duration_years')->nullable();
            $table->string('transmission')->nullable();
            $table->string('volume')->nullable();
            $table->text('text')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
