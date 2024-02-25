<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'hospitals';

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'address',
        'thumbnail',
        'latitude',
        'longitude',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
