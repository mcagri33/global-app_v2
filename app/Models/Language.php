<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory,Uuids;

    protected $fillable = [
        'name',
        'short_name',
        'is_default'
    ];
}
