<?php

namespace Api;

use Illuminate\Database\Eloquent\Model;

class AuthToken extends Model
{
    protected $fillable = ['device'];
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer'
    ];

    public function user()
    {
    	return $this->belongsTo('Api\User');
    }
}
