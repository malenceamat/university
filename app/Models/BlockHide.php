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
        'possibilities_hide',
        'statistics_hide',
        'audience_hide',
        'cards_hide',
        'stages_hide',
        'selection_hide',
        'additional_hide',
        'team_hide',
        'result_hide',
        'partners_hide',
        'contact_hide'
    ];
}
