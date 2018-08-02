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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'portal'], function() {
            # Admin Dashboard
            Route::get('dashboard', 'DashboardController@index');
            Route::get('/', 'DashboardController@index');
            Route::get('surveys', 'DashboardController@surveys');

   //          Route::get('qr-code', function () 
			// {
			//   return  QRCode::url('werneckbh.github.io/qr-code/')
   //                ->setSize(8)
   //                ->setMargin(2)
   //                ->png();  
			// });
            Route::post('requests/create', 'RequestController@postCreate');
            Route::get('requests/create', 'RequestController@getCreate');
            Route::get('requests', 'RequestController@index');

            #Users
            Route::get('users', 'UserController@index');
            Route::get('users/create/{organization?}', 'UserController@getCreate');
            Route::post('users/store', 'UserController@postCreate');
            Route::get('users/deleted', 'UserController@deletedIndex');
            Route::get('users/{user}', 'UserController@show');
            Route::get('users/{user}/edit', 'UserController@getEdit');
            Route::post('users/{user}/edit', 'UserController@postEdit');
            Route::get('users/{user}/delete', 'UserController@softDelete');
            Route::get('users/deleted/{id}/restore', 'UserController@restoreUser');
            

            #kitchens
            Route::get('kitchens/create', 'KitchenController@getCreate');
            Route::get('kitchens/{organization?}', 'KitchenController@index');
            Route::post('kitchens/store', 'KitchenController@postCreate');
            Route::get('kitchens/deleted', 'KitchenController@deletedIndex');
            Route::get('kitchens/{kitchen}', 'KitchenController@show');
            Route::get('kitchens/{kitchen}/edit', 'KitchenController@getEdit');
            Route::post('kitchens/{kitchen}/edit', 'KitchenController@postEdit');
            Route::get('kitchens/{kitchen}/delete', 'KitchenController@softDelete');
            Route::get('kitchens/deleted/{id}/restore', 'KitchenController@restoreKitchen');
            Route::get('kitchens/survey/{kitchen}-{name}', 'KitchenController@survey');
            Route::get('kitchens/survey/details/{kitchen}-{name}', 'KitchenController@surveyDetails');
            Route::get('kitchens/survey/detailspdf/{kitchen}', 'KitchenController@surveyDetailsPDF');
            Route::get('kitchens/survey/day/pdf/{kitchen}/{date}', 'KitchenController@surveyDayPDF');
            Route::post('kitchens/surveys', 'KitchenController@surveys');
            Route::get('kitchens/survey/criteria', 'KitchenController@criteria');
            Route::get('kitchens/survey/detailsExcel/{kitchen}', 'KitchenController@surveyDetailsExcel');
            

            #kitchens
            Route::get('organizations', 'OrganizationController@index');
            Route::get('organizations/dashboard', 'OrganizationController@dashboard');
            Route::get('organizations/create', 'OrganizationController@getCreate');
            Route::post('organizations/store', 'OrganizationController@postCreate');
            Route::get('organizations/deleted', 'OrganizationController@deletedIndex');
            Route::get('organizations/{organization}', 'OrganizationController@show');
            Route::get('organizations/{organization}/edit', 'OrganizationController@getEdit');
            Route::post('organizations/{organization}/edit', 'OrganizationController@postEdit');
            Route::get('organizations/{organization}/delete', 'OrganizationController@softDelete');
            Route::get('organizations/deleted/{id}/restore', 'OrganizationController@restoreOrganization');
            Route::get('organizations/survey/{organization}-{name}', 'OrganizationController@survey');
            Route::get('organizations/survey2/{organization}-{name}', 'OrganizationController@survey2');
            Route::post('organizations/survey/pdf', 'OrganizationController@surveyPDF');
            Route::get('organizations/survey/criteria', 'OrganizationController@criteriaPDF');
            Route::get('organizations/survey/employeesCriteria', 'OrganizationController@employeesCriteria');
            Route::post('organizations/survey/employeesPDF', 'OrganizationController@employeesPDF');
            Route::get('organizations/survey/ExcelCriteria', 'OrganizationController@ExcelCriteria');
            Route::post('organizations/survey/criteriaExcelPost', 'OrganizationController@criteriaExcelPost');
            


            # Profile 
            Route::get('profile', 'ProfileController@index');
            Route::post('update', 'ProfileController@update');
           //Route::post('changepicture', 'ProfileController@picture');
            Route::post('change_password', 'ProfileController@update_password');

});
