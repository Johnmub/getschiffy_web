<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vip_address extends Model
{
    use HasFactory;

    protected $fillable = ['vip_address', 'vip_name'];
}
