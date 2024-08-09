<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestWorkFiles extends Model
{
    use HasFactory;
    protected $table = "requestwork_files";
    protected $guarded = [];

    public function requestworks(): BelongsTo
    {
        return $this->belongsTo(RequestWork::class,'requestwork');
    }

}
