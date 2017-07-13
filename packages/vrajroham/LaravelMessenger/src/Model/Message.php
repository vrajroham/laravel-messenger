<?php

namespace vrajroham\LaravelMessenger\Model;

use Illuminate\Database\Eloquent\Model;
use vrajroham\LaravelMessenger\Model\User;

class Message extends Model
{
    protected $table="message";

    protected $fillable = ['user_id','message','user_to'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
