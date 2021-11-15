<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'ar_name' => 'Public',
            'class' => 'badge badge-success'
        ],
        0 => [
            'ar_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status, $this->ar_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.name' : '0.name' thay cho ['name'] bên trang index
    }
}
