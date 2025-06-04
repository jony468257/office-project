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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->nullable()->comment('Slider Title (English)');
            $table->string('title_bn', 255)->comment('Slider Title (Bangla)');
            $table->text('description_en', 1000)->nullable()->comment('English Details');
            $table->text('description_bn', 1000)->comment('Bangla Details');
            $table->string('image')->comment('Image URL');
            $table->boolean('row_status')->default(true)->comment('Row Status (Active/Inactive)') ;
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
