<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latest_login extends Model
{
    use HasFactory;

    protected $primaryKey = 'last_id';
}
