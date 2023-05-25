<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Service extends Model
{
    use HasFactory;

    protected $table = 'shop_services';

    protected $fillable = [
        'name',
        'shop_product_id',
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'shop_product_id');
    }
}
