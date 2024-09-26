<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'variant'
           ,'product_search_category'
           ,'category_group'
           ,'brand'
           ,'category'
           ,'collection'
           ,'style_code'
           ,'web_update_status'
           ,'master_style'
           ,'web_product_short_desc'
           ,'store_description'
           ,'web_product_long_desc'
           ,'style_attribute_1'
           ,'style_attribute_2'
           ,'style_attribute_3'
           ,'style_attribute_4'
           ,'style_attribute_5'
           ,'store_color_code'
           ,'color_family'
           ,'color_description'
           ,'store_color_description'
           ,'web_display_size'
           ,'size_1'
           ,'size_2'
           ,'eans_sap'
           ,'web_product_swatch'
           ,'web_product_images_1'
           ,'web_product_images_2'
           ,'web_product_images_3'
           ,'web_product_images_4'
           ,'web_product_images_5'
           ,'web_product_images_6'
           ,'lining'
           ,'support'
           ,'straps'
           ,'bra_coverage'
           ,'collar_type'
           ,'panty_style_description'
           ,'panty_waist_type'
           ,'fragrance'
           ,'web_display_volume'
           ,'fibre_content'
           ,'removable padding'
           ,'country_of_origin'
    ];
}
