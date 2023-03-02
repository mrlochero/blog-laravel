<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name', 'password', 'email'];

    public $timestamps = false;
}
