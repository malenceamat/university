<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockHide extends Model
{
    use HasFactory;

    protected $table = 'block_hide';
    protected $fillable = [
        'banner_hide',
        'partners_hide',
        'about_us_hide',
        'advantagesh',
        'gives_hide',
        'stages_hide',
        'programs_hide',
        'faqs_hide',
        'contact_hide',
        'teacher_hide'
    ];
}
