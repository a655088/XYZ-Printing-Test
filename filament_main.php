<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filament_main extends Model
{
    //
    protected $table = "filament_main";//可以指定你想要的名稱
    protected $guarded = array();
    public function parent()
    {
        return $this->belongsTo(filament::class, 'parent_id');
    }
    
}
