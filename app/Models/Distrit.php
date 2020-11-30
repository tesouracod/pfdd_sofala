<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrit extends Model
{
    use HasFactory;

     protected $table = 'distrit';
    protected $primaryKey = 'id';
    // protected $name = 'id';
    public $timestamps = false;
    protected $fillable = [
        'dristit', 'province_id',
    ];

    public function Institution()
    {
        return $this->hasOne(Institution::class, 'province_id', 'id');
    }
}
