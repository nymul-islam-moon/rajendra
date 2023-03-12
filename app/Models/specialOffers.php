<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialOffers extends Model
{
    use HasFactory;

    protected $table = 'special_offers';

    protected $fillable = ['name','image','description', 'start_date','end_date', 'price'];
}
