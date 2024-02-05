<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $guarded = [];

    // public function company(): HasOne
    // {
    //     return $this->hasOne(Company::class,'company');
    // }
    // public function company(): BelongsTo
    // {
    //     return $this->belongsTo(Company::class,'company');
    // }

}
