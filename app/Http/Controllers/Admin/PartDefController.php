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


use RealRashid\SweetAlert\Facades\Alert;

class PartDefController extends Controller
{
    public function store($variations, $attributeId, $product)
    {
        $counter = count($variations['value']);

        for ($i = 0; $i < $counter; $i++) {
            ProductVariation::create([
                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]
            ]);
        }
    }

    public function update($variationIds)
    {
        foreach($variationIds as $key => $value){
            $productVariation = ProductVariation::findOrFail($key);
            $productVariation->update([
                'price' => $value['price'],
                'quantity' => $value['quantity'],
                'sku' => $value['sku'],
                'sale_price' => $value['sale_price'],
                'date_on_sale_from' =>  Jalalian::fromFormat('Y-m-d H:i:s',$value['date_on_sale_from'])->toCarbon()->toDateTimeString(),
                'date_on_sale_to' => Jalalian::fromFormat('Y-m-d H:i:s',$value['date_on_sale_to'])->toCarbon()->toDateTimeString()

            ]);
        }
    }

    public function change($variations, $attributeId, $product)
    {
        ProductVariation::where('product_id' , $product->id)->delete();

        $counter = count($variations['value']);
        for ($i = 0; $i < $counter; $i++) {
            ProductVariation::create([
                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]
            ]);
        }
    }

}
