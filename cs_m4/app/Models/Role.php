<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'group_name'
    ];
    public $timestamp = true;
    public function product()
    {
        return $this->hasMany(Product::class, 'group_id', 'id');
    }
}
