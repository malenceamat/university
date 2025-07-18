<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';
    protected $fillable = ['name'];

    public function teachers()
    {
        return $this->belongsToMany(Team::class,'program_team');
    }
}
