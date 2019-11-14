<?php

namespace App\Models\English;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'billboard';
    protected $connection = 'mysql3';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['billboard_id', 'name', 'client', 'description'];

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
