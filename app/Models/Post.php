<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // protected $table='posts';


    use HasFactory,SoftDeletes;

    protected $fillable=[
        'title',
        'short_content',
        'content',
        'photo'
                        ];


=======

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'content',
        'short_content',
        'photo'
                        ];
>>>>>>> 72f1f6b4590facbb41141bcb968769b35dd15001
}
