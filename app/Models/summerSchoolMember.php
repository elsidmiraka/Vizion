<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class summerSchoolMember extends Model
{
    use HasFactory;
    protected $table = 'summer_school_members';
    public $timestamps = false;
}
