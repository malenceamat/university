<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'head', 'fio', 'job', 'merits'];

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_team');
    }
}
