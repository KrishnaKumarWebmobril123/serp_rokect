<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_type', 191);
            $table->unsignedBigInteger('model_id');
            $table->char('uuid', 191)->nullable();
            $table->string('collection_name', 191);
            $table->string('name', 191);
            $table->string('file_name', 191);
            $table->string('mime_type', 191)->nullable();
            $table->string('disk', 191);
            $table->string('conversions_disk', 191)->nullable();
            $table->unsignedBigInteger('size');
            $table->text('manipulations'); // Changed from json to text
            $table->text('custom_properties'); // Changed from json to text
            $table->text('generated_conversions'); // Changed from json to text
            $table->text('responsive_images'); // Changed from json to text
            $table->unsignedInteger('order_column')->nullable();
            $table->timestamps();
        });
        
    }
}
