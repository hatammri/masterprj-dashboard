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

    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class,'company');
    }
    public function postCompany(): BelongsTo
    {
        return $this->belongsTo(Role::class,'post_incompany');
    }
    public function userID(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
