<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zagolovok extends Model
{
    use HasFactory;

    protected $table = 'zagolovok';

    protected $fillable = ['head','text','button','link_button','telegram'];
}
