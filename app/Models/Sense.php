<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sense extends Model
{
    use HasFactory;
    protected $table = 'sense';

    protected $fillable = ['definition', 'vocabulary_id'];

    public function vocabulary()
    {
        return $this->belongsTo(Vocabulary::class);
    }

    public function example()
    {
        return $this->hasMany(Example::class); // Example là model bảng example
    }
}
