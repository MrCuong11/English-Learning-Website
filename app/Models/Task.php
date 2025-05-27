<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'lession_id',
        'title',
        'instructions',
        'task_order'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
