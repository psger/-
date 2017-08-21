<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
        protected $fillable = [
        'num', 'class_id', 'class_name','stu_id','stu_name','stu_nation','stu_sex',
        'stu_birth','stu_source','stu_identity','stu_address'
    ];
}
