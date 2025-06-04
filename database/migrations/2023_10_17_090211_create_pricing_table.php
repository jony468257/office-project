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
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->nullable()->comment('English Title');
            $table->string('title_bn', 255)->comment('Bangla Title');
            $table->string('sub_title_en', 255)->comment('sub title en');
            $table->string('sub_title_bn', 255)->comment('sub title bn');
            $table->string('attachment', 1000)->comment('Attachment Path');
            $table->integer('price_en')->nullable()->comment('price en');
            $table->integer('price_bn')->comment('price bn');
            $table->string('url', 255)->comment('url');
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
        Schema::dropIfExists('pricing');
    }
};
