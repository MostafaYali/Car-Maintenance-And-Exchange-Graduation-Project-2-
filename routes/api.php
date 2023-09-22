<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\Ahmed_E_API;
use App\Http\Controllers\PageControllerAPI;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'api'],function(){
                    //***  adham api ***//
    //get routes:
    Route::get('/model/{brandNames}',[PageControllerAPI::class,'model']);
    Route::get('/info car/{modelNames}', [PageControllerAPI::class,'infocar']);
    Route::get('/new cars ads', [PageControllerAPI::class,'newcarads']);
    Route::get('/used cars ads', [PageControllerAPI::class,'usedcarads']);
    Route::get('/spareparts ads', [PageControllerAPI::class,'sparepartads']);
    Route::get('/tboa ads', [PageControllerAPI::class,'tboaads']);
    Route::get('/rent cars ads', [PageControllerAPI::class,'rentcarads']);
    Route::get('/ads', [PageControllerAPI::class,'ads']);
    Route::get('/favorites/{username}', [PageControllerAPI::class,'favoriteView']) -> name('page.favorites');
    Route::get('/brand', [PageControllerAPI::class,'brand']);


    //post routes
    Route::post('/info rent/{modelNames}', [PageControllerAPI::class,'insertRentAds']);
    Route::post('/info tboa/{modelNames}', [PageControllerAPI::class,'insertTboaAds']);
    Route::post('/info sparepart/{modelNames}', [PageControllerAPI::class,'insertSparepartsAds']);
    Route::post('/info car/{modelNames}', [PageControllerAPI::class,'sellCarAds']);
    Route::post('/new cars ads', [PageControllerAPI::class,'favorite2']);
    Route::post('/used cars ads', [PageControllerAPI::class,'favorite2']) -> name('page.usedcarads');
    Route::post('/spareparts ads', [PageControllerAPI::class,'favorite']) -> name('page.sparepartads');
    Route::post('/tboa ads', [PageControllerAPI::class,'favorite']) -> name('page.tboaads');
    Route::post('/rent cars ads', [PageControllerAPI::class,'favorite2']) -> name('page.rentcarads');
    Route::post('/favorites/{username}', [PageControllerAPI::class,'favorite']) -> name('page.favorites');
    Route::post('/favorites/{username}', [PageControllerAPI::class,'favorite2']) -> name('page.favorites');

    
                //*** Ahmed Ehab Api ***//
    // Get Routes

    Route::get('/logged' , [Ahmed_E_API::class , 'HomeLoggedView']);
    Route::get('/auth/user/workshop/post/view', [Ahmed_E_API::class , 'workshoppostview']);
    Route::get('/auction/main', [Ahmed_E_API::class , 'auctionview']);
    Route::get('/auction/add/credit/main/{id}', [Ahmed_E_API::class , 'creditview']);
    Route::get('/auction/details/main/{id}', [Ahmed_E_API::class , 'auctiondetailsview']);
    Route::get('/auction/add/bid/{id}', [Ahmed_E_API::class , 'bidadd']);
    Route::get('/auth/user/average/main', [Ahmed_E_API::class , 'averageview']);





    // POST Route

    Route::post('/adduser' , [Ahmed_E_API::class , 'adduser']);
    Route::post('/check/user', [Ahmed_E_API::class , 'checkuser']);
    Route::post('/auth/user/editpassword/update', [Ahmed_E_API::class , 'updateuser']);
    Route::post('/auth/user/editemail/update', [Ahmed_E_API::class , 'emailupdate']);
    Route::post('/auth/user/image/update', [Ahmed_E_API::class , 'userimageupdate']);
    Route::post('/auth/user/workshop/address', [Ahmed_E_API::class , 'Workshopaddressupdate']);
    Route::post('/auth/user/workshop/phone', [Ahmed_E_API::class , 'Workshopphoneupdate']);
    Route::post('/auth/user/workshop/image', [Ahmed_E_API::class , 'workshopimageupdate']);
    Route::post('/auth/user/workshop/edit/pass', [Ahmed_E_API::class , 'updateworkshop']);
    Route::post('/auth/user/workshop/add/post', [Ahmed_E_API::class , 'addpost']);
    Route::post('/forget/email/check', [Ahmed_E_API::class , 'forgetpassword']);
    Route::post('/forget/password/reset/done', [Ahmed_E_API::class , 'forgetpasswordreset']);
    Route::post('/auction/add', [Ahmed_E_API::class , 'auctionadd']);
    Route::post('/auction/add/credit', [Ahmed_E_API::class , 'creditadd']);
    Route::post('/auth/user/average/car/data', [Ahmed_E_API::class , 'cardataupdate']);
    Route::post('/auth/user/average', [Ahmed_E_API::class , 'averageOil']);
});
