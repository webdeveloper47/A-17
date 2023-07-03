<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public static function countByCategoryId($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }


    public static function getSoftDeleted()
    {
        return self::onlyTrashed()->get();
    }
    
}

$softDeletedPosts = Post::getSoftDeleted();



$posts = Post::with('category')->get();

foreach ($posts as $post) {
    echo "Post: $post->title\n";
    echo "Category: $post->category->name\n";
    echo "-----------\n";
}

$categoryId = 1;
$count = Post::countByCategoryId($categoryId);

