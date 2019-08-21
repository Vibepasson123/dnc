<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activation extends Model
{
    protected $table= 'activations';
    protected $fillable=['user_id','code','completed','reason'];
    public $primarykey='id';

    public function employee_sat()
    {
        return $this->hasOne(User::class);
    }
}

