<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChengeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('brand', 'brand_id');
            $table->renameColumn('category', 'category_id');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('brand_id')->nullable()->change();
            $table->unsignedInteger('category_id')->nullable()->change();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['brand_id']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('brand_id')->change();
            $table->string('category_id')->change();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('category_id', 'category');
            $table->renameColumn('brand_id', 'brand');
        });
    }
}
