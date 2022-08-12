<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_account extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    
    public $timestamps = false;
}
