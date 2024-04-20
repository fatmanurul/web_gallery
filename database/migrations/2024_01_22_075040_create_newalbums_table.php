<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewalbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newalbums', function (Blueprint $table) {
            $table->bigIncrements('AlbumID');
            $table->string('NamaAlbum');
            $table->text('Deskripsi');
            $table->date('TanggalDibuat');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('abm_created_by')->nullable();;
            $table->unsignedBigInteger('abm_updated_by')->nullable();
            $table->unsignedBigInteger('abm_deleted_by')->nullable();
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('abm_created_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('abm_updated_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('abm_deleted_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->timestamp('abm_created_at');
            $table->timestamp('abm_updated_at')->nullable();
            $table->timestamp('abm_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newalbums');
    }
}
