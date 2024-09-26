<?php

namespace App\Imports;

use App\Models\Products;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductsImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $first = true;
        $column_name = array(
            'product_search_category'
            ,'category_group'
            ,'brand'
            ,'category'
            ,'collection'
            ,'style_code'
            ,'variant'
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
        );

        foreach ($rows as $row)
        {
            if($first){
                $first = false;
                continue;
            }

            if(count($row) == 44){
                $data = array();
                foreach ($row as $key => $value) {
                    $data[$column_name[$key]] = $value;
                }

                Products::firstOrCreate($data);
            }

        }
    }
}
