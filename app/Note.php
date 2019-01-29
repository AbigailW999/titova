<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'note';
    
    protected $fillable = [
          'name',
          'body',
          'picture',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        Note::observe(new UserActionsObserver);
    }
    
    
    
    
}