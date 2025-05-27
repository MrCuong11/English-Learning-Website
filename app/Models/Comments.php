<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_id', 'user_id', 'comment', 'parent_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function replies()
    {
        return $this->hasMany(Comments::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comments::class, 'parent_id');
    }
}
