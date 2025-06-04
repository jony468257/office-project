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
        Schema::create('research_and_development', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->nullable()->comment('English Title');
            $table->string('title_bn', 255)->comment('Bangla Title');
            $table->text('description_en')->nullable()->comment('English Description');
            $table->text('description_bn')->comment('Bangla Description');
            $table->string('button_name')->comment('Button name for each button');
            $table->string('button_url', 255)->nullable()->comment('Button URL for each button');
            $table->string('image')->comment('Image Path');
            $table->string('banner_image')->comment('Banner Image Path');
            $table->string('problem', 255)->nullable()->comment('Problem title');
            $table->text('problem_desc')->nullable()->comment('Problem description');
            $table->string('solution_title', 255)->nullable()->comment('Solution title');
            $table->string('solution_image')->comment('Solution image');

            $table->string('features_title', 255)->nullable()->comment('Features title');
            $table->text('solution_desc')->nullable()->comment('Solution description');
            $table->json('solution_data')->nullable()->comment('Solution keys and images as JSON');
            $table->json('features_data')->nullable()->comment('Feature keys and images as JSON');
            $table->json('works_data')->nullable()->comment('Works keys as JSON');

            $table->string('works_title', 255)->nullable()->comment('Works title');
            $table->text('works_desc')->nullable()->comment('Works description');
            $table->string('works_image')->comment('Works image path');

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
        Schema::dropIfExists('research_and_development');
    }
};
