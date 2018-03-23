<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $tabel='tasks';
    protected $fillable = [
        'name',
        'desc'
    ];
}
