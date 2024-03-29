<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = "packages";
    
    protected $fillable = [
        'package_title',
        'package_type',
        'package_price',
        'package_num_days',
        'package_num_listings',
        'package_for',
        'price_permonth',
        'promotion_percent',
        'currency',
    ];

     const  PACKAGE_FOR = [
        'individual' => 'Individual Member',
        'corporate'  => 'Corporate Member',
    ];

}