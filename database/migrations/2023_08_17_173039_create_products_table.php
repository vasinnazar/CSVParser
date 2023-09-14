<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable()->comment('Код');
            $table->string('naming')->nullable()->comment('Наименование');
            $table->string('level1')->nullable()->comment('Уровень1');
            $table->string('level2')->nullable()->comment('Уровень2');
            $table->string('level3')->nullable()->comment('Уровень3');
            $table->string('price')->nullable()->comment('Цена');
            $table->string('sp_price')->nullable()->comment('ЦенаСП');
            $table->integer('quantity')->nullable()->comment('Количество');
            $table->text('property_fields')->nullable()->comment('Поля свойств');
            $table->text('joint_purchases')->nullable()->comment('Совместные покупки');
            $table->string('measure_unit')->nullable()->comment('Единица измерения');
            $table->string('image')->nullable()->comment('Картинка');
            $table->string('main_page_display')->nullable()->comment('Выводить на главной');
            $table->text('description')->nullable()->comment('Описание');
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
        Schema::dropIfExists('products');
    }
}
