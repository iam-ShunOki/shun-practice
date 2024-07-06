<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thread;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'author_name',
        'rank',
    ];

    public function threads()
    {
        return $this->belongsToMany(Thread::class, 'like', 'author_id', 'thread_id');
    }
}
