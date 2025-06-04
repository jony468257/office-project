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
        Schema::create('officer_staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255)->nullable()->comment('Name in English');
            $table->string('name_bn', 255)->comment('Name in Bangla');
            $table->string('designation', 255)->comment('Designation');
            $table->integer('shift')->comment('Designation');
            $table->string('email')->nullable()->comment('Email Address');
            $table->string('phone')->nullable()->comment('Phone Number');
            $table->string('image')->comment('Image Path');
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
        Schema::dropIfExists('officer_staffs');
    }
};
