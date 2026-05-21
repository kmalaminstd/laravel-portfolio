<?php

use App\Models\Media;
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
        Schema::create('my_infos', function (Blueprint $table) {
            $table->id();
            $table->string("resume")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("github")->nullable();
            $table->string("location")->nullable();
            $table->string("email")->nullable();
            $table->string("twitter")->nullable();
            $table->string("whatsapp")->nullable();
            $table->foreignIdFor(Media::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_infos');
    }
};
