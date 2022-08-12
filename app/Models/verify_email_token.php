<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verify_email_token extends Model
{
    use HasFactory;

    protected $primaryKey = 'verify_id';
    protected $fillable = ['verify_token', 'verify_email'];
}
