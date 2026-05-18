<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $table = 'counters';

    protected $fillable = [
        'incon_1', 'title_1', 'value_1',
        'incon_2', 'title_2', 'value_2',
        'incon_3', 'title_3', 'value_3',
        'incon_4', 'title_4', 'value_4',
        'status',
    ];
}
