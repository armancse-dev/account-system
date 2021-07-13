<?php

// Example Routes

Route::group(['middleware' => 'auth'],function (){
    Route::get('/dashboard','DashboardController@index');
    Route::resource('sessions','SessionController');
    Route::resource('semesters','SemesterController');
    Route::resource('technology','TechnologyController');
    Route::resource('student','StudentController');
    Route::resource('head','HeadController');
    Route::resource('schema-master','SchemaMasterController');
    Route::resource('schema-detail','SchemaDetailController');

    Route::get('payment/payment-single','PaymentController@StudentDetail');
    Route::resource('payment','PaymentController');


    Route::get('payment-report/single','AdminPaymentReportController@searchSingle');
    Route::resource('payment-report','AdminPaymentReportController');



    Route::resource('payables','AdminPayableController');
//    Route::post('payables/group','AdminPayableController@showGroup');
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');


Route::get('/payables/view', function(){
    return view('dashboard.payable.view');
});




Route::get('/clear',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
});
