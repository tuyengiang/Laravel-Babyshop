<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'as'=>'index','uses'=>'IndexController@show_index'
]);

/**admin */
Route::get('/dashbroad',['as'=>'show_admin','uses'=>'AdminController@show_admin']);

Route::group(['prefix'=>'/dashbroad/products'],function(){
    Route::get('/add-products',['as'=>'add-product','uses'=>'ProductController@show_add_product']);
    Route::get('/all-product',['as'=>'show-product','uses'=>'ProductController@all_product']);
    /**add-category */
    Route::get('/category',['as'=>'add-category','uses'=>'ProductController@show_add_category']);
    Route::post('/add-product',['as'=>'show_category','uses'=>'ProductController@add_category_product']);
    Route::delete('/category/{id}',['as'=>'delete_category','uses'=>'ProductController@destroy_category']);
    Route::get('/edit-category/{id}',['as'=>'edit_category','uses'=>'ProductController@edit_category']);
    Route::put('/category/{id}/',['as'=>'update_category','uses'=>'ProductController@update_category']);
    /**add category terms */
    Route::get('/category-terms',['as'=>'show_terms','uses'=>'ProductController@show_add_term']);
    Route::post('/category-terms',['as'=>'add-terms','uses'=>'ProductController@Insert_term']);
    Route::delete('/category-terms/{id}',['as'=>'delete-terms','uses'=>'ProductController@delete_term']);
    Route::get('/edit-term/{id}',['as'=>'show-edit','uses'=>'ProductController@show_term_edit']);
    Route::put('/category-terms/{id}',['as'=>'update-terms','uses'=>'ProductController@update_term']);

});
Route::group(['prefix'=>'/products'],function(){
    Route::get('/{slug}',['as'=>'index-category','uses'=>'IndexController@show_category_product']);
    Route::get('/danh-muc/{slug}',['as'=>'index-category-terms','uses'=>'IndexController@show_category_term']);
});

/**can nang */
Route::group(['prefix'=>'/properties'],function(){
    Route::get('/add-weight',['as'=>'add_weight','uses'=>'PropertiController@add_weight']);
    Route::post('/show-weight',['as'=>'insert-weight','uses'=>'PropertiController@insert_weight']);
    Route::delete('/add-weight/{id_weight}',['as'=>'delete-weight','uses'=>'PropertiController@delete_weight']);
    Route::get('/edit-weight/{id}',['as'=>'edit-weight','uses'=>'PropertiController@edit_weight']);
    Route::put('/show-weight/{id}',['as'=>'update-weight','uses'=>'PropertiController@update_weight']);
});

/**post */

Route::group(['prefix'=>'/posts'],function(){
    Route::get('/add-category-post',['as'=>'show-category-post','uses'=>'ArticleController@show_category_post']);
    Route::post('/add-category-post',['as'=>'add-category-post','uses'=>'ArticleController@add_category_post']);
    Route::delete('/add-category/{id}',['as'=>'delete-category-post','uses'=>'ArticleController@delete_category_post']);
    Route::get('/edit-category-posts/{id}',['as'=>'edit-category-post','uses'=>'ArticleController@edit_category_post']);
    Route::put('/add-category/{id}',['as'=>'update-category-post','uses'=>'ArticleController@update_category_post']);

    /**posts */
    Route::get('/add-post',['as'=>'add-post','uses'=>'ArticleController@show_form_post']);
    Route::post('/add-post',['as'=>'insert-post','uses'=>'ArticleController@insert_form_post']);
    Route::get('/all-post',['as'=>'show_posts','uses'=>'ArticleController@all_post']);
    Route::delete('/all-post/{id}',['as'=>'delete-posts','uses'=>'ArticleController@delete_posts']);
    Route::get('/edit-post/{id}',['as'=>'show-edit-posts','uses'=>'ArticleController@show_edit_posts']);
    Route::put('/edit-post/{id}',['as'=>'update-posts','uses'=>'ArticleController@update_posts']);
});


/***index */
Route::get('/{slug}',['as'=>'post-content','uses'=>'IndexController@post_content']);