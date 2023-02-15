<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Modules\Blog\Databases\Factories\ArticleFactory::new();
    }
}
