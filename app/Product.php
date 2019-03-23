<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = 'productbestellingen';
    public $timestamps = false;
    protected $dates = ['timestamp'];
    // protected $dateFormat = 'U';
    protected $fillable = ['timestamp, factuurnummer, omschrijving', 'aantal', 'prijsperstuk'];

    public function factuurnummertje(){
           return $this->hasMany('App\Invoice', 'factuurnummer', 'factuurnummer');
    }
}
