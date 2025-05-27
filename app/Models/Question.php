<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    //
    protected $table = 'questions';
    protected $fillable = [
        'task_id',
        'question',
        'type',
        'question_order'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    
    public function options()
    {
        return $this->hasMany(Option::class)->orderBy('option_order');
    }
    
}
