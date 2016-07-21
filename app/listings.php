<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'item_name',
		'item_picture',
		'item_description',
		'category_id',
		'pricing_rate_id',
		'hiring_cost',
		'hiring_cost_with_expert',
		'item_location',
		'available_quantity',
		'item_contact',
		'supplier_id',
    ];

}
