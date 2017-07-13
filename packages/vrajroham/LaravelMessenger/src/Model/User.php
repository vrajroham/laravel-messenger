<?php

namespace vrajroham\LaravelMessenger\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use vrajroham\LaravelMessenger\Model\Message;

class User extends Authenticatable
{
    protected $table="users";

    public function message()
    {
    	return $this->hasMany(Message::class);
    }
}
