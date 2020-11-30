<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $name = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nome', 'email', 'password', 'gender', 'date_birth', 'distrit_id', 'Academic_level', 'course_id', 'category_id', 'reg_date',
    ];

}
