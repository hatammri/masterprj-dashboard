<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PmPart extends Model
{
    use HasFactory;
    protected $table = "pm_part";
    protected $guarded = [];
}
