<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

      protected $table = 'contact';
    protected $primaryKey = 'phone';
    // protected $name = 'id';
     public $timestamps = false;
    protected $fillable = [
        'phone', 'member_id',
    ];

    public function Users()
    {
        return $this->hasOne(Users::class, 'member_id', 'id');
    }

}
