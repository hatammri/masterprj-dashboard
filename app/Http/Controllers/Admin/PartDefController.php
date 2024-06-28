<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Ostan;
use App\Models\UnitMeasurement;
use App\Models\Specialty;
use App\Models\Part;
use App\Models\Brand;
use App\Models\Pm;
use App\Models\PmPart;


use RealRashid\SweetAlert\Facades\Alert;

class PartDefController extends Controller
{
    public function store($FormData, $PmId)
    {
        $counter = count($FormData['part_id']);

        for ($i=0; $i<$counter ; $i++) {
            $PmPart = PmPart::create([
                'pm_id' =>$PmId,
                'part_id' => $FormData['part_id'][$i],
                'brand_id' =>$FormData['brand_id'][$i],
                'num_parts_used' =>$FormData['num_parts_used'][$i],
                'date_Replacement' => $FormData['date_Replacement'][$i],
                'date_Replacement_next' => $FormData['date_Replacement_next'][$i],
                'Allowed_working_hours' => $FormData['Allowed_working_hours'][$i],

            ]);
        }
    }

    // public function update($variationIds)
    // {
    //     foreach($variationIds as $key => $value){
    //         $productVariation = ProductVariation::findOrFail($key);
    //         $productVariation->update([
    //             'price' => $value['price'],
    //             'quantity' => $value['quantity'],
    //             'sku' => $value['sku'],
    //             'sale_price' => $value['sale_price'],
    //             'date_on_sale_from' =>  Jalalian::fromFormat('Y-m-d H:i:s',$value['date_on_sale_from'])->toCarbon()->toDateTimeString(),
    //             'date_on_sale_to' => Jalalian::fromFormat('Y-m-d H:i:s',$value['date_on_sale_to'])->toCarbon()->toDateTimeString()

    //         ]);
    //     }
    // }

    // public function change($variations, $attributeId, $product)
    // {
    //     ProductVariation::where('product_id' , $product->id)->delete();

    //     $counter = count($variations['value']);
    //     for ($i = 0; $i < $counter; $i++) {
    //         ProductVariation::create([
    //             'attribute_id' => $attributeId,
    //             'product_id' => $product->id,
    //             'value' => $variations['value'][$i],
    //             'price' => $variations['price'][$i],
    //             'quantity' => $variations['quantity'][$i],
    //             'sku' => $variations['sku'][$i]
    //         ]);
    //     }
    // }

}
