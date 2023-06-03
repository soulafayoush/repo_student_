<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{  protected $filelable=['student_name','groub_id'];
    use HasFactory;



public function group(){


  return  $this->belongsTo(Group::class);
}


public function course(){


    $this->belongsToMany(Course::class);
}

}
