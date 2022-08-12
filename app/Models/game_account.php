<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_account extends Model
{
    use HasFactory;

    protected $primaryKey = 'game_id';
    
    public $timestamps = false;
}
