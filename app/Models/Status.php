<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];
    //在用户模型中指明一个用户拥有多条微博
    public function user()
    {

      return $this->belongsTo(User::class);
    }

}
