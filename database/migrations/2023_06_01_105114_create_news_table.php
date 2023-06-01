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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // ニュースのタイトルを保存するカラム
            $table->timestamp('dated_at')->useCurrent(); // ニュースの指定した日付
            $table->string('body');  // ニュースの本文を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
