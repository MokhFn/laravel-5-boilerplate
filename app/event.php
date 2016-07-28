<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class event extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name' , 'starting_date', 'ending_date', 'assigned_to', 'description'];
    
    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}
