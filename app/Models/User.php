<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model
{
    protected $collection = 'produk';
    protected $connection = 'mongodb';
    protected $casts = [
        'tanggal' => 'date(Y-m-d)'
    ];

    public function setTanggal($value){
        $this->attributes['tanggal'] = date('Y-m-d', strtotime($value));
    }

    public function getTanggal($value){
        return date('Y-m-d', strtotime($value));
    }
}
