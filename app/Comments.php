<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comments
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Comments extends Model
{
    //
    protected $fillable=['name','email','comment','blog_id'];

    public function blogs(){
        return $this->belongsTo(Blog::class);
    }
}
