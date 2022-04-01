<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['Id', 'Names', 'Lastnames', 'Address', 'Phone', 'Credit_experience'];
}
