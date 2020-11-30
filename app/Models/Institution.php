<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $table = 'institution';
    protected $primaryKey = 'id';
    // protected $name = 'id';
    public $timestamps = false;
    protected $fillable = [
        'institution', 'province_id',
    ];

    public function Province()
    {
        return $this->hasOne(Province::class, 'province_id', 'id');
    }
}
