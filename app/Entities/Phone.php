<?php

namespace PhoneBook\Entities;

use Illuminate\Database\Eloquent\Model;
use PhoneBook\Entities\Person;

class Phone extends Model
{

    protected $table = 'phones';

    protected $fillable = [
        'type',
        'country',
        'ddd',
        'prefix',
        'suffix'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function getNumberAttribute()
    {
        return vsprintf('%s (%s) %s-%s', [
            $this->country,
            $this->ddd,
            $this->prefix,
            $this->suffix
        ]);
    }
}
