<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Blog extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class, 'admin_id');
    }
}