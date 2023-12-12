<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{

    protected $table = 'products';

    protected $primaryKey = 'product_ID';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'product_ID',
        'name',
        'description',
        'price',
    ];
}
