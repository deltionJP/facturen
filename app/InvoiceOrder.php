<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceOrder extends Model
{
     protected $table = 'invoice_order';
     public $timestamps = false;
     protected $primaryKey = ['factuurnummer', 'product_id'];
     protected $fillable = ['factuurnummer, product_id, product_aantal', 'prijs_per_stuk'];

     public function hasCustomer(){
            return $this->hasOne('App\Customer', 'customer_id', 'customer_id');
     }
     public function hasInvoice(){
         return $this->hasOne('App\Invoice', 'factuurnummer','factuurnummer');
     }
}
