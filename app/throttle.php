<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class throttle extends Model {
protected $table = 'throttle'; 




public function valth() {
return $this -> belongToMany(User::class); 
}
}
