<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'done', 'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
