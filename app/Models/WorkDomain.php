<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkDomain extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the Users for this Work Domain
     */

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function assets()
    {
        return $this->belongsToMany('App\Models\Asset');
    }
}
