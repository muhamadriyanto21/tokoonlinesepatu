<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svimage extends Model
{
    protected $primaryKey = 'svimage_id';
    use HasFactory;
    protected $table = 'svimage';
    public $timestamps = false;
    protected $fillable = [
        'svimage_idproduct',
        'image'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'svimage_idproduct');
    }
}
