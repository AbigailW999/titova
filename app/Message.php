<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'message';
    
    protected $fillable = [
          'name',
          'contact',
          'description',
          'picture',
          'photo_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Message::observe(new UserActionsObserver);
    }
    
    public function photo()
    {
        return $this->hasOne('App\Photo', 'id', 'photo_id');
    }


    
    
    
}