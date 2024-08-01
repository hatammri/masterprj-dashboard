<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PmPart extends Model
{
    use HasFactory;
    protected $table = "pm_part";
    protected $guarded = [];


    public function parts(): BelongsTo
    {
        return $this->belongsTo(Part::class,'part_id');
    }
    public function pms(): BelongsTo
    {
        return $this->belongsTo(Pm::class,'pm_id');
    }
    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
