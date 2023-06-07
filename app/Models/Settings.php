<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
	protected $fillable = [
        'name',
        'icon',
        'add_one',
        'add_two',
        'add_three',
        'add_four',
        'address',
        'email',
        'mobile',
        'twitter',
        'instagram',
        'facebook',
        'copyright',
    ];
}
