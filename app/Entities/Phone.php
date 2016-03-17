<?php

namespace LumenDiary\Entities;

use Illuminate\Database\Eloquent\Model;

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
}
