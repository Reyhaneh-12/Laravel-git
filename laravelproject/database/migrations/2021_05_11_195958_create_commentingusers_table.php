<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentingusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentingusers', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->date('commentdate');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('normalusers');
            $table->unsignedBigInteger('questionid');
            $table->foreign('questionid')->references('id')->on('questions');
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
        Schema::dropIfExists('commentingusers');
    }
}
