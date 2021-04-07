<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOrdersTest extends Model
{
    protected $table = 'payment_orders_test';

    protected $fillable = ['clientid','service_name', 'pay_amount', 'client_email', 'client_phone', 'payment_id', 'invoice_id', 'status'];

}
