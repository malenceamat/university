<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTeam extends Model
{
    use HasFactory;

    protected $table = 'program_team';
    protected $fillable = ['program_id','team_id'];
}
