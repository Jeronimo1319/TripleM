<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $table = 'spaces';
    protected $primaryKey = 'space_id';
    protected $fillable = [
        'name',
        'size',
        'object_id',
    ];

    public function objects()
    {
        return $this->belongsToMany(ObjectModel::class, 'space_object', 'space_id', 'object_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'space_id', 'space_id');
    }
}
