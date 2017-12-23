<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PostCategory
 *
 * @property int $article_id
 * @property int $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostCategory whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PostCategory whereCategoryId($value)
 * @mixin \Eloquent
 */
class PostCategory extends Model
{
    protected $fillable = ['article_id', 'category_id'];
}
