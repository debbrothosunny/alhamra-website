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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->longtext('description_1');
            $table->string('title_2');
            $table->string('title_3');
            $table->longtext('description_2');
            $table->longtext('location');
            $table->string('number_1');
            $table->string('number_2');
            $table->string('email');
            $table->string('location_icon');
            $table->string('phone_icon_1');
            $table->string('phone_icon_2');
            $table->string('email_icon');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkdin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
