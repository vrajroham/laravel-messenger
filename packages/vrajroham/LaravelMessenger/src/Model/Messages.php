<?php

namespace vrajroham\LaravelMessenger\model;

use Illuminate\Database\Eloquent\Model;
use vrajroham\LaravelMessenger\Model\User;

class Messages extends Model
{
    protected $table="message";

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
