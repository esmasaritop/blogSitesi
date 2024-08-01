<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yorum extends Model
{
    use HasFactory;

    protected $table = 'yorumlar';

    protected $fillable =[
        'user_id',
        'content',
        'film_id'

    ];
}
