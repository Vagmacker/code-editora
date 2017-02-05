<?php

namespace CodePub\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    use FormAccessible;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'author_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(){

        return $this->belongsTo(User::class);

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function formCategoriesAttribute()
    {
        return $this->categories->pluck('id')->all();
    }
}
