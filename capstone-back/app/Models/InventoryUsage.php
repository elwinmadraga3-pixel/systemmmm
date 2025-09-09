<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryUsage extends Model
{
    protected $table = 'inventory_usage';
    protected $fillable = ['inventory_item_id','date','qty_used'];
}