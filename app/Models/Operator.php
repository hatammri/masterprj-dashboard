<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operator extends Model
{
    use HasFactory;
    protected $table = "operator";
    protected $guarded = [];

    // public function Specialties(): BelongsTo
    // {
    //     return $this->belongsTo(Specialty::class,'specialty');
    // }
    public function Specialties()
    {
        return $this->belongsToMany(Specialty::class,"operator_specialty");
    }
    public function Sematdata(): BelongsTo
    {
        return $this->belongsTo(Role::class,'semat');
    }

}
