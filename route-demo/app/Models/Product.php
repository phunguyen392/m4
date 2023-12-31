<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'quantity',
        'status',
        'category_id',
        'deleted_at',
        'image'

    ];
    public $timestamps = true;
  
public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
