<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dormMember extends Model
{
    use HasFactory;
    protected $table = 'dorm_members';
    public $timestamps = false;
}
