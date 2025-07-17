<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectModel extends Model
{
    use HasFactory;

    protected $table = 'objects';
    protected $primaryKey = 'object_id';
    protected $fillable = [
        'name',
        'status',
        'quantity',
    ];

    public function spaces()
    {
        return $this->belongsToMany(Space::class, 'space_object', 'object_id', 'space_id');
    }
}
