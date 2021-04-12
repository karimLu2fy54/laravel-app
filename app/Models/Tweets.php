<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
    protected $table = "tweets";

    protected $fillable = [
        'author',
        'message',
        'hashtag'
    ];

    public $timestamps = true;
}
