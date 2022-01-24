<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingSession extends Model
{
    protected $table = 'shopping_session';
    use HasFactory;

    public function user()
    {
        return $this -> belongsTo(user::class, 'users_id');
    }
}
