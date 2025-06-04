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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable()->comment('Name');
            $table->string('email')->comment('Email Address');
            $table->string('phone')->nullable()->comment('Phone Number');
//            $table->string('mobile')->comment('Mobile Number');
            $table->string('address', 255)->nullable()->comment('address in English');
            $table->integer('total_cattle')->comment('total_cattle');
//            $table->string('image')->nullable()->comment('Image Path');
            $table->text('message', 1000)->nullable()->comment('Message');
//            $table->boolean('row_status')->default(true)->comment('Row Status (Active/Inactive)');
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
        Schema::dropIfExists('contacts');
    }
};
