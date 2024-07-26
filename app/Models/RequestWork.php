<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestWork extends Model
{
    use HasFactory;
    protected $table = "requestwork";
    protected $guarded = [];

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class,'customer');
    }
    public function equipments(): BelongsTo
    {
        return $this->belongsTo(Equipment::class,'equipment');
    }

    public function creators(): BelongsTo
    {
        return $this->belongsTo(operator::class,'creator');
    }
    public function barnds(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function typeEqupments(): BelongsTo
    {
        return $this->belongsTo(TypeEquipment::class,'type_equipment_id');
    }
    public static function GregoriantoJalali($date)

    {
        return verta($date)->format('Y-m-d');


    }


}
