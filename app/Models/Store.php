<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const HOT_ON = 1;
    const HOT_OFF = 0;
    protected $status = [
        1 => [
            'st_name' => 'Public',
            'class' => 'badge badge-success'
        ],
        0 => [
            'st_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];

    protected $hot = [
        1 => [
            'name' => 'hot',
            'class' => 'badge badge-danger'
        ],
        0 => [
            'name' => 'not',
            'class' => 'badge badge-secondary'
        ]
    ];

    public function getStatus(){
        return array_get($this->status, $this->st_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.st_name' : '0.name' thay cho ['name'] bên trang index
    }
    public function getHot(){
        return array_get($this->hot,$this->st_hot,'[N\A]');
    }
    public function relation_area(){
        return $this->belongsTo(Area::class,'st_area_id');
    }
    public function relation_category(){
        return $this->belongsTo(Category::class,'st_category_id');
    }
    public function relation_typeProduct(){
        return $this->belongsTo(TypeProduct::class,'st_typeProduct_id');
    }
//    public function getStorePaginate(){
//        return $this->get_store()->paginate(4);
//    }

}
