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
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id")->nullable(false);
            $table->date("when")->nullable(false);
            $table->integer("feel")->nullable(false);
            $table->boolean("favorite")->nullable();

            $table->string("title", 200)->nullable(false);
            $table->text("content")->nullable(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diaries');
    }
};
