<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Blog
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Blog extends Model
{
    //
    protected $fillable=['title','image','body'];

    public function comment(){
        return $this->hasMany(Comments::Class);
    }

    public function midSize()
    {

        $temp = Str::limit($this->body,50);

        return $temp;

    }
    public function createComment(array $data)
    {
        $this->comment()->create($data);
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc')->limit(3);
    }


}
