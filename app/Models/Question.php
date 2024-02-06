<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    protected $fillable = ['ask','response'];

    public function faqs()
    {
        return $this->belongsTo(Faq::class,'faq_id');
    }
}
