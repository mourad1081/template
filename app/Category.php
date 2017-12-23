<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property int $id
 * @property int|null $id_parent
 * @property string $descr_fr
 * @property string|null $descr_en
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDescrEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDescrFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereIdParent($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    //
}
