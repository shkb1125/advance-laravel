<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 2章2-9 UUID
    protected $fillable = [
        'uuid',
        'name',
        'price',
    ];

    // 2章2-9 UUID productsテーブルの非表示項目を設定
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
