<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vocabulary extends Model
{
    use HasFactory;

    protected $table = 'vocabulary'; 

    protected $fillable = [
        'phonetic', 'phonetic_am', 'phonetic_am_text', 'phonetic_text', 'pos', 'word'
    ];
    public function senses() {
        return $this->hasMany(Sense::class);
    }
}
