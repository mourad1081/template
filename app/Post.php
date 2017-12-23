<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property int $id
 * @property string $title Titre de l'article
 * @property string $content Contenu de l'article
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $img
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUserId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $fillable = ['title', 'content', 'created_at', 'updated_at', 'user_id', 'img'];
}
