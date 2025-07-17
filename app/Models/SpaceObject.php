<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceObject extends Model
{
    use HasFactory;

    protected $table = 'space_object';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'space_id',
        'object_id',
    ];
}
