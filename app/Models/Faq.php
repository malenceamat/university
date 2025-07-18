<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';

    protected $fillable = ['question'];

    public function ques()
    {
        return $this->hasMany(Question::class,'faq_id');
    }

}
