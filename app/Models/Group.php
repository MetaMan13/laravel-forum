<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Group extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users');
    }
}
