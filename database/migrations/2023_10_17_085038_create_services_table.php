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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->nullable()->comment('English Title');
            $table->string('title_bn', 255)->comment('Bangla Title');
            $table->text('description_en', 1000)->nullable()->comment('English Description');
            $table->text('description_bn', 1000)->comment('Bangla Description');
            $table->string('image')->comment('Image Path');
            $table->string('banner_image')->comment('Image Path');
            $table->string('benefits_one_en')->nullable();
            $table->string('benefits_two_en')->nullable();
            $table->string('benefits_three_en')->nullable();
            $table->string('benefits_four_en')->nullable();
            $table->string('benefits_five_en')->nullable();
            $table->string('benefits_six_en')->nullable();
            $table->string('benefits_one_bn')->nullable();
            $table->string('benefits_two_bn')->nullable();
            $table->string('benefits_three_bn')->nullable();
            $table->string('benefits_four_bn')->nullable();
            $table->string('benefits_five_bn')->nullable();
            $table->string('benefits_six_bn')->nullable();
            $table->boolean('row_status')->default(true)->comment('Row Status (Active/Inactive)');
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
        Schema::dropIfExists('services');
    }
};
