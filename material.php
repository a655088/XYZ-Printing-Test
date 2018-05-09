<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    //
    protected $table = "material";//可以指定你想要的名稱
    protected $casts = [
        'product_id' => 'json',
    ];
        //
     public function main()
    {
        return $this->hasMany(material_main::class, 'parent_id');
    }
    function getIdAttribute() {
        if(!empty($this->attributes['id']))
     return str_pad($this->attributes['id'],10,'0',STR_PAD_LEFT);
    
 }
}
