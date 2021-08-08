<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scolarshipMember extends Model
{
    use HasFactory;
    protected $table = 'scolarship_members';
    public $timestamps = false;
}
