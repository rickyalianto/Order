<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'status'
    ];

    public function changeStatus(String $status)
    {
        return $this->update(['status' => $status]);
    }
}
