<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipment extends Model
{
    use HasFactory;
    protected $table = "equipment";
    protected $guarded = [];

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function typeEquipments(): BelongsTo
    {
        return $this->belongsTo(TypeEquipment::class,'type_equipment_id');
    }

}
