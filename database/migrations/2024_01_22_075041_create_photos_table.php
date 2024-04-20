<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('FotoID');
            $table->string('JudulFoto');
            $table->text('DeskripsiFoto');
            $table->date('TanggalUnggah');
            $table->string('LokasiFile');
            $table->UnsignedBigInteger('AlbumID');
            $table->UnsignedBigInteger('UserID');
            $table->unsignedBigInteger('fto_created_by')->nullable();;
            $table->unsignedBigInteger('fto_updated_by')->nullable();
            $table->unsignedBigInteger('fto_deleted_by')->nullable();
            $table->foreign('fto_created_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('fto_updated_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('fto_deleted_by')->references('UserID')->on('users')->onDelete('cascade');
            $table->timestamp('fto_created_at');
            $table->timestamp('fto_updated_at')->nullable();
            $table->timestamp('fto_deleted_at')->nullable();
            $table->foreign('AlbumID')->references('AlbumID')->on('newalbums')->onDelete('cascade');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
