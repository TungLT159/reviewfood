<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCook extends Model
{
    protected $table = 'type_cooks';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'tc_name' => 'Public',
            'class' => 'badge badge-success'
        ],
        0 => [
            'tc_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status, $this->tc_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.name' : '0.name' thay cho ['name'] bên trang index
    }
}
