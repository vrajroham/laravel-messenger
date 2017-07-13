<?php

namespace vrajroham\LaravelMessenger\model;

use Illuminate\Database\Eloquent\Model;
use vrajroham\LaravelMessenger\Model\Messages;

class User extends Model
{
    protected $table="users";

    protected $hidden = [
        'password', 'remember_token','created_at','updated_at'
    ];

    public function messages()
    {
    	return $this->hasMany(Messages::class);
    }
}
