<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fill dữ liệu, bắt buộc phải có để chạy Seeder
    protected $fillable = ['title', 'content'];

    //
}
