<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pm extends Model
{
    use HasFactory;
    protected $table = "pm";
    protected $guarded = [];

    public function requestworks(): BelongsTo
    {
        return $this->belongsTo(RequestWork::class,'requestwork_id');
    }
    public function equipments(): BelongsTo
    {
        return $this->belongsTo(Equipment::class,'equipment_id');
    }

    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
