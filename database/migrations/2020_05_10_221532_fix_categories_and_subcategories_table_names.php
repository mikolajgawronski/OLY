<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixCategoriesAndSubcategoriesTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function(Blueprint $table) {
            $table->dropForeign('posts_subcategory_id_foreign');
        });
        Schema::table('subcategorys', function(Blueprint $table) {
            $table->dropForeign('subcategorys_category_id_foreign');
        });
        Schema::rename('subcategorys', 'subcategories');
        Schema::rename('categorys', 'categories');
        Schema::table('subcategories', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('SET NULL');
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onUpdate('cascade')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table) {
            $table->dropForeign('posts_subcategory_id_foreign');
        });
        Schema::table('subcategories', function(Blueprint $table) {
            $table->dropForeign('subcategories_category_id_foreign');
        });
        Schema::rename('subcategories', 'subcategorys');
        Schema::rename('categories', 'categorys');
        Schema::table('subcategorys', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categorys')->onUpdate('cascade')->onDelete('SET NULL');
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('subcategory_id')->references('id')->on('subcategorys')->onUpdate('cascade')->onDelete('SET NULL');
        });
    }
}
