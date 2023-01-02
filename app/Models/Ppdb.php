<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'name',
        'school',
        'gender',
        'email',
        'tlp',
        'papa',
        'mama',
];
}
