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

}
