<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table = 'purchase';
	protected $fillable = [
	'customer_name',
        'offering_id',
        'quantity'
    ];
}
