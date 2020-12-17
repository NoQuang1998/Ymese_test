<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ymesetbl extends Model
{
    protected $fillable = ['name', 'created_date', 'download_link'];
}
