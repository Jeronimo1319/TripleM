<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments';
    protected $primaryKey = 'assignment_id';
    protected $fillable = [
        'space_id',
        'user_id',
        'assignment_date',
        'withdrawal_date',
    ];

    public function space()
    {
        return $this->belongsTo(Space::class, 'space_id', 'space_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
