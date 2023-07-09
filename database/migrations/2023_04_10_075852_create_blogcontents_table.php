<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogcontents', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('created_by');
            $table->string('title');
            $table->string('slug');
            $table->longtext('description_1');
            $table->longtext('description_2');
            $table->longtext('description_3');
            $table->longtext('description_4');
            $table->tinyInteger('status')->default('0');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogcontents');
    }
};
