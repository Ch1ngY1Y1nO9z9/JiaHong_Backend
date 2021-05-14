<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['type' , 'name_ch', 'name_en', 'content_ch', 'content_en', 'sort', 'img', 'created_at', 'updated_at', 'img2', 'img3', 'img4'];

    public function ProductType()
    {
        return $this->belongsTo('App\ProductType', 'product_type_id');
    }

    protected $table = 'products';
}
