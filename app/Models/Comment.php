<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
    ];

    public function user()
    {
        // return $this->belongsTo('Model', 'foreign_key', 'owner_key');
        return $this->belongsTo('App\Models\user','user_id','id');
    }
}
