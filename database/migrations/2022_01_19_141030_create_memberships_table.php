<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('season');
            $table->string('type');
            $table->tinyInteger('num_payments')->nullable();
            $table->unsignedBigInteger('each_payment')->nullable();
            $table->string('method');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('status');
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
        Schema::dropIfExists('memberships');
    }
}
