<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    protected $table = "birds";
    protected $fillable = [
        'jenis_burung',
        'jenis_kelamin',
        'umur',
        'harga',
        'deskripsi',
        'gambar',
        'seller_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'birds');
    }
}
