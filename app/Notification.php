<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    function findSender($id)
    {
        return User::find($id);
    }

    function findProduct($id)
    {
        return Product::find($id);
    }
}
