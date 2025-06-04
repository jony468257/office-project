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
        Schema::create('mission_visions', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255)->nullable()->comment('English Title');
            $table->string('title_bn', 255)->comment('Bangla Title');
            $table->integer('type')->comment('0 = Mission, 1 = Value, 2 = Target Customer');
            $table->string('image')->comment('Image Path');
            $table->text('description_en', 1000)->comment('English Description');
            $table->text('description_bn', 1000)->comment('Bangla Description');
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
        Schema::dropIfExists('mission_visions');
    }
};
