<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    связь с таблицей posts
    protected $table = 'posts';


//    Поля с которыми можно работать
    protected $fillable = [
       'title',
       'detail',
       'image'
    ];
}
