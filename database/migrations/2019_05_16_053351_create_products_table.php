<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('main_category_id');
            $table->integer('sub_category_id');
            $table->integer('product_brand_id');
            $table->string('product_name')->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('prodcut_long_description')->nullable();
            $table->float('product_new_price')->nullable();
            $table->float('product_old_price')->nullable();
            $table->string('product_color')->nullable();
            $table->integer('product_qty');
            $table->integer('prodcut_image');
            $table->tinyInteger('status')->default(0);
            $table->integer('view_total')->default(0);
            $table->integer('admin_id');
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
