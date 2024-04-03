<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operator_specialty extends Model
{
    use HasFactory;
    protected $table = "operator_specialty";
    protected $guarded = [];

}
