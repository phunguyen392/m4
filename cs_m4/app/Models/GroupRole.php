<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupRole extends Model
{
    use HasFactory;
    protected $table = 'grouprole';
    protected $fillable = [
        'name',
        'deleted_at'
    ];
    public $timestamp = true;
    public function product()
    {
        return $this->hasMany(Product::class, 'group_id', 'id');
    }
}
