<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'status', 'gender', 'birthday'
    ];
    
    public function status(){
        return $this->hasOne('App\Status','status');
    } 
}
