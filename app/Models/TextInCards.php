<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextInCards extends Model
{
    use HasFactory;


    protected $fillable = ['text','card_id'];
    public function cards()
    {
        return $this->hasOne(Card::class);
    }
}
