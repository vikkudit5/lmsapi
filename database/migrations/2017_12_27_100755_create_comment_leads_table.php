<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_lead', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_id')->unsigned();
             $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
            $table->integer('comment_id')->unsigned();
           $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
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
        Schema::dropIfExists('comment_leads');
    }
}
