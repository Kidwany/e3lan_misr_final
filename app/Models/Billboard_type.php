<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billboard_type extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'billboard_type';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'letter'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

}
