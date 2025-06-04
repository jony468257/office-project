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
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255)->comment('Name (English)');
            $table->string('name_bn', 255)->comment('Name (Bangla)');
            $table->string('favicon')->nullable()->comment('Favicon URL');
            $table->string('logo')->nullable()->comment('Logo URL');
            $table->string('description_en', 255)->comment('Description (English)');
            $table->string('description_bn', 255)->comment('Description (Bangla)');
            $table->string('address', 100)->comment('address');
            $table->string('email', 100)->comment('email');
            $table->string('copyrights', 100)->comment('Copyright Information');
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
        Schema::dropIfExists('basic_information');
    }
};
