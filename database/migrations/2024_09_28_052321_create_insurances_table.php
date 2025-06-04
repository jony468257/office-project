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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->comment('English Title');
            $table->string('title_bn', 255)->nullable()->comment('Bangle Title');
            $table->string('description_en')->comment('description en');
            $table->string('description_bn')->nullable()->comment('description bn');
            $table->string('attachment', 1000)->comment('Attachment Path');
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
        Schema::dropIfExists('insurances');
    }
};
