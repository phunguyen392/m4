<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetails';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'total'

    ];
    public $timestamps = true;
    protected $primarykey = 'id';
}
