<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        "id",
        "id_user",
        "id_burung",
        "total_price",
        "cod",
        "snap_token",
        "status",
        "status_cod",
        "seller_id",
    ];

    public function bird()
    {
        return $this->hasOne(Bird::class,'birds');
    }
    public function user()
    {
        return $this->belongsToMany(User::class,'users');
    }
}
