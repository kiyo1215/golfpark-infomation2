<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golfpark extends Model
{
    use HasFactory;

    protected $table = 'golfparks';
    protected $fillable =
    [
        'name',
        'name_kana',
        'roof',
        'wash',
        'restroom',
        'round',
        'lunch',
        'smoke',
        'golfbag',
        'baggage',
        'info'
    ];
}