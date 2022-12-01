<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory,Uuids;
    protected $fillable = [
        'language_id',
        'site_title',
        'company_desc',
        'logo',
        'favicon',
        'meta_name',
        'meta_description',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'smtp_host',
        'smtp_port',
        'smtp_mail',
        'smtp_pass'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

}
