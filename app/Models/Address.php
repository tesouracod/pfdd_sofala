<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;


    protected $table = 'address';
    protected $primaryKey = 'id';
    // protected $name = 'id';
    public $timestamps = false;
    protected $fillable = [
        'adrdress', 'distrit_id',
    ];

    public function Distrit()
    {
        return $this->belongsTo(Distrit::class, 'distrit_id', 'id');
    }
}
