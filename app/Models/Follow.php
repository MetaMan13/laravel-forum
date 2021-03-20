<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'follow_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function follower()
    {
        return $this->belongsTo(User::class, 'follow_id');
    }

    public function user_follows()
    {
        return $this->belongsTo(User::class, 'follow_id');
    }
}
