<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['address_1','address_2','city','state','zip',];

    public function addressable()
    {
        return $this->morphTo();
    }
}
