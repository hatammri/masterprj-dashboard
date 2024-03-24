<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Machine extends Model
{
    use HasFactory;
    protected $table = "machine";
    protected $guarded = [];

    public function Specialties(): BelongsTo
    {
        return $this->belongsTo(Specialty::class,'specialty');
    }



}
