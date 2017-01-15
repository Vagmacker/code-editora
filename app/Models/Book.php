<?php

namespace CodePub\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use FormAccessible;

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
