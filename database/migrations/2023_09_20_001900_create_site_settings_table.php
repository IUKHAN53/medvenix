<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('site_settings', function (Blueprint $table) {
      $table->id();
      $table->string('home_video')->nullable();
      $table->string('about_video')->nullable();
      $table->string('youtube_link')->nullable();
      $table->string('linkedin_link')->nullable();
      $table->string('twitter_link')->nullable();
      $table->string('privacy_link')->nullable();
      $table->string('tos_link')->nullable();
      $table->string('cookie_policy_link')->nullable();
      $table->string('eula_link')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('site_settings');
  }
};
