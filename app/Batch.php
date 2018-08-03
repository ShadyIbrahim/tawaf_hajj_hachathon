<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $table = 'batches';
}
