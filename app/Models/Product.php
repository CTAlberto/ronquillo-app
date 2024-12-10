<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'type_id', 'location_id', 'quantity', 'quantity_type_id'];
    // En Product.php (Modelo)
public function type()
{
    return $this->belongsTo(Type::class);
}

public function location()
{
    return $this->belongsTo(Location::class);
}

public function quantityType()
{
    return $this->belongsTo(QuantityType::class);
}

}
