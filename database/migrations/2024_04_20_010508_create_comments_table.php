<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('cmn_id');
            $table->unsignedBigInteger('FotoID');
            $table->string('cmn_name');
            $table->string('cmn_email');
            $table->text('cmn_comment');
            $table->foreign('FotoID')->references('FotoID')->on('photos')->onDelete('cascade');
            $table->timestamp('cmn_created_at');
            $table->timestamp('cmn_updated_at')->nullable();
            $table->timestamp('cmn_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
