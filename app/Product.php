<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price',
    ];

	/**
     * Get the user that owns the product.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
