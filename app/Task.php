<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public $timeStamps=false;
    public function toggleStatus(){
    	$this->status=!$this->status;
    	return $this;
    }
}
