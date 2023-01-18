<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'sub_title',
        'price'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
