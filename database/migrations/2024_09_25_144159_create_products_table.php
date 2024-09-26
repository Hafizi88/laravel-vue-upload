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
        Schema::create('products', function (Blueprint $table) {
            $table->string('variant')->unique();
            $table->string('product_search_category')->nullable();
            $table->string('category_group')->nullable();
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('collection')->nullable();
            $table->string('style_code')->nullable();
            $table->string('web_update_status')->nullable();
            $table->string('master_style')->nullable();
            $table->string('web_product_short_desc')->nullable();
            $table->string('store_description')->nullable();
            $table->text('web_product_long_desc')->nullable();
            $table->string('style_attribute_1')->nullable();
            $table->string('style_attribute_2')->nullable();
            $table->string('style_attribute_3')->nullable();
            $table->string('style_attribute_4')->nullable();
            $table->string('style_attribute_5')->nullable();
            $table->string('store_color_code')->nullable();
            $table->string('color_family')->nullable();
            $table->string('color_description')->nullable();
            $table->string('store_color_description')->nullable();
            $table->string('web_display_size')->nullable();
            $table->string('size_1')->nullable();
            $table->string('size_2')->nullable();
            $table->string('eans_sap')->nullable();
            $table->string('web_product_swatch')->nullable();
            $table->string('web_product_images_1')->nullable();
            $table->string('web_product_images_2')->nullable();
            $table->string('web_product_images_3')->nullable();
            $table->string('web_product_images_4')->nullable();
            $table->string('web_product_images_5')->nullable();
            $table->string('web_product_images_6')->nullable();
            $table->string('lining')->nullable();
            $table->string('support')->nullable();
            $table->string('straps')->nullable();
            $table->string('bra_coverage')->nullable();
            $table->string('collar_type')->nullable();
            $table->string('panty_style_description')->nullable();
            $table->string('panty_waist_type')->nullable();
            $table->string('fragrance')->nullable();
            $table->string('web_display_volume')->nullable();
            $table->text('fibre_content')->nullable();
            $table->string('removable padding')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
