<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'type_products';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'tp_name' => 'Public',
            'class' => 'badge badge-success'
        ],
        0 => [
            'tp_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];
    public function getStatus()
    {
        return array_get($this->status, $this->tp_active, '[N\A]');
        //có thể sử dụng $this
    }

//    public function relation_store()
//    {
//        return $this->hasMany(Store::class, 'st_typeProduct_id','id');
//    }
    public function get_store()
    {
        return $this->hasMany(Store::class, 'st_typeProduct_id','id')->where('st_active',Store::STATUS_PUBLIC);
    }
}
