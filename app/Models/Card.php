<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;


    protected $fillable = ['image' ,'head', 'underhead', 'basic', 'qualification', 'more'];

    public function TextInCards()
    {
        return $this->hasMany(TextInCards::class);
    }
}
