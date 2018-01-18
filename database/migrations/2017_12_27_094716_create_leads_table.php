<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->string('first_name');
            $table->string('email',255)->unique();
            $table->string('last_name');
            $table->string('telephone');
            $table->enum('status',['0','1'])->comment('0=>inactive,1=>active');
            $table->string('source');
            $table->date('due_date');
            $table->string('budget');
            $table->string('is_assigned');
            $table->string('address');
            $table->string('alternate_address');
            $table->string('house_no');
            $table->integer('postcode');
            $table->string('message');
            $table->string('assigned_to');
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
        Schema::dropIfExists('leads');
    }
}
