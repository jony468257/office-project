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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255)->nullable()->comment('English Name');
            $table->string('name_bn', 255)->comment('Bangla Name');
            $table->string('farm_name_en', 255)->comment('Farm Name English');
            $table->string('farm_name_bn', 255)->comment('Farm Name Bangla');
            $table->string('address_en', 255)->comment('English Address');
            $table->string('address_bn', 255)->comment('Bangla Address');
            $table->string('image', 1000)->comment('image Path');
            $table->text('description_en', 1000)->nullable()->comment('English Description');
            $table->text('description_bn', 1000)->nullable()->comment('Bangla Description');
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
        Schema::dropIfExists('testimonials');
    }
};
