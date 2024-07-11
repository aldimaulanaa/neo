<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('work_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('submitted_by');
            $table->date('submitted_when');
            $table->string('site_code');
            $table->string('activity');
            $table->string('uom')->nullable();
            $table->integer('block')->nullable();
            $table->string('task')->nullable();
            $table->time('start')->nullable();
            $table->time('end')->nullable();
            $table->string('mesin_id');
            $table->integer('fuel');
            $table->string('check_by')->nullable();
            $table->date('when_check')->nullable();
            $table->string('verified_by')->nullable();
            $table->date('when_verified')->nullable();
            $table->string('duty');
            $table->string('reason')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_transactions');
    }
}
