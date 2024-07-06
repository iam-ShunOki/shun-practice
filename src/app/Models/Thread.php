<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_id',
        'author_id',
        'thread_title',
        'thread_name',
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'like', 'thread_id', 'author_id');
    }
}
