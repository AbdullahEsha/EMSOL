<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory;
    protected $table = 'ambulances';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ambulanceDetail',
        'img1',
        'img2',
        'img3',
        'img4',
        'cost',
        'available',
    ];
   
}
