<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_idcategory',
        'name_product',
        'price',
        'details',
    ];
    public function svimage()
    {
        return $this->hasOne(Svimage::class, 'svimage_idproduct', 'product_id');
    }
    public function svmany()
    {
        return $this->hasmany(Svimage::class, 'svimage_idproduct', 'product_id');
    }
}
