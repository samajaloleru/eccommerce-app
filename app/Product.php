<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Table Name
    protected $table = 'product';

    // PrimaryKey
    public $primaryKey = 'product_id';

    // Timestamps
    public $timestamps = false;

    //for setting relationship with user
    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}