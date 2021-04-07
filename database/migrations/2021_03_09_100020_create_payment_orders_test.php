<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentOrdersTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payment_Orders_Test', function (Blueprint $table) {
            $table->bigIncrements('orderid');//номер заказа в нашей системе
            $table->text('clientid');//ФИО плательщика
            $table->text('service_name');//услуга
            $table->integer('pay_amount')->default(0);//сумма
            $table->string('client_email')->default('');//email плательщика
            $table->string('client_phone')->default('');//номер телефона плательщика
            $table->bigInteger('payment_id')->default(0);//Номер заказа в системе PayKeeper
            $table->bigInteger('invoice_id')->default(0);//уникальный идентификатор соответсвующей ссылке
            $table->string('status')->default('');//статус платежа: created, sent, paid, expired
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Payment_Orders_Test');
    }
}
