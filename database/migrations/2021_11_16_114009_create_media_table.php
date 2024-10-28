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

            $table->morphs('model');
            $table->uuid('uuid')->nullable()->unique();
            $table->string('collection_name',100);
            $table->string('name',100);
            $table->string('file_name',100);
            $table->string('mime_type',100)->nullable();
            $table->string('disk',100);
            $table->string('conversions_disk',100)->nullable();
            $table->unsignedBigInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->json('generated_conversions');
            $table->json('responsive_images');
            $table->unsignedInteger('order_column')->nullable();

            $table->nullableTimestamps();
        });
    }
}
