<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table ='users';

    protected $primaryKey ='userid';

    public $timestamps = false;

    protected $fillable=[
        'userid',
        'username',
        'password',
        'email',
        'locations'
    ];
}
