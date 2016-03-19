<?php

namespace PhoneBook\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $table = 'people';

    protected $fillable = [
        'name',
        'nickname',
        'gender'
    ];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
