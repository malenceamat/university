<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadProgramm extends Model
{
    use HasFactory;

    protected $table = 'head_programms';

    protected $fillable = ['head_block'];


}
