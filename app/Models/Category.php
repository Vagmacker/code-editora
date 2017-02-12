<?php

namespace CodePub\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function books(){
        return $this->belongsToMany(Book::class);
    }

    public function getNameTrashedAttribute(){
        return $this->trashed() ? "{$this->name} ( Inativo)" : $this->name;
    }

}
