<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

class Customer extends Model
{
    use HasFactory,HasRoles;
    protected $table = "customer";
    protected $guarded = [];


    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class,'company');
    }
    public function rloes(): BelongsTo
    {
        return $this->belongsTo(Role::class,'role');
    }
    public function posts(): BelongsTo
    {
        return $this->belongsTo(Role::class,'post');
    }
}
