<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupModel extends Model
{
    use HasFactory;
    protected $table='signup';
    protected $primary_key='id';
}
