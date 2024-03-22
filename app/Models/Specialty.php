<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specialty extends Model
{
    use HasFactory;
    protected $table = "specialty";
    protected $guarded = [];

    public function unitmeasurements(): BelongsTo
    {
        return $this->belongsTo(UnitMeasurement::class,'unitmeasurement');
    }



}
