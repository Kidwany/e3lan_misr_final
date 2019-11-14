<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'billboard';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'image_id', 'service_id', 'area_id', 'size_id', 'dimension', 'location', 'created_by'];

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

    public function campaign()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_items', 'billboard_id', 'campaign_id');
    }

    public function billborad_en()
    {
        return $this->hasOne(\App\Models\English\Billboard::class, 'billboard_id', 'id')->withDefault();
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id')->withDefault();
    }

    public function size()
    {
        return $this->belongsTo(Image::class, 'size_id', 'id')->withDefault();
    }

    public function childOfChildLocation()
    {
        return $this->belongsTo(Child_of_child_location::class, 'location_id', 'id')->withDefault();
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id')->withDefault();
    }

}