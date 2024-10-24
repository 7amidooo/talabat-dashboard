<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{

    protected $table = 'ads';
    protected $fillable = ['title','member_id','description','image','status'];
    public function members()
    {
        return $this->belongsTo(member::class);
    }
}
