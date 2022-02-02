<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('e_mail')->unique();
            $table->string('tel_no');
            $table->string('emergency_contact');
            $table->string('emergency_tel');
            $table->date('dob')->nullable();
            $table->string('experience');
            $table->string('position');
            $table->string('activity');

            $table->integer('membership_id')->unsigned()->nullable();
            $table->foreign('membership_id')
                ->references('id')
                ->on('memberships')
                ->onDelete('cascade');

            $table->tinyInteger('whatsapp_accept')->nullable();
            $table->text('comments');
            $table->string('form_paid');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('status');
            $table->string('hash_field');
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
        Schema::dropIfExists('members');
    }
}
