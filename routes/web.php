<?php

use Illuminate\Support\Facades\Route;

//gwad
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OldCarController;
use App\Http\Controllers\NewCarController;
use App\Http\Controllers\SuggestionsController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\AdminAccountController;

use App\Http\Controllers\AuctionApproval;

//adham controller
use App\Http\Controllers\PageController;


// ahmed ehab controller
use App\Models\users;
use App\Http\Controllers\register;
use App\Http\Controllers\Home;
use App\Http\Controllers\WorkShops;
use App\Http\Controllers\PasswordUpdate;
use App\Http\Controllers\average;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\chat;
use Illuminate\Support\Facades\Mail;
use App\Mail\forgetpassword;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// gwad routing

Route::get('/adminaccounts', [AdminAccountController::class, 'acc'])->name('admin.adminaccounts');
Route::get('/adminaccounts/edit/{id}', [AdminAccountController::class, 'aEdit']);
Route::post('/adminaccounts/update/{id}', [AdminAccountController::class, 'aUpdate']);
Route::get('/adminaccounts/delete/{id}', [AdminAccountController::class, 'aDelete']);
Route::get('/adminaccounts/view/{id}', [AdminAccountController::class, 'AdminProfile']);

Route::get('/admin', [AdminController::class, 'home'])->name('admin.index');


Route::get('/addads', [AdminController::class, 'vadd'])->name('admin.addads');
Route::post('/addads/add', [AdminController::class, 'sadd'])->name('store.addads');


Route::get('/oilbreak', [AdminController::class, 'voilbreak'])->name('admin.oilbreak');
Route::post('/oilbreak/add', [AdminController::class, 'soilbreak'])->name('store.oilbreak');


Route::get('/oilmotor', [AdminController::class, 'voilmotor'])->name('admin.oilmotor');
Route::post('/oilmotor/add', [AdminController::class, 'soilmotor'])->name('store.oilmotor');


Route::get('/oiltrans', [AdminController::class, 'voiltrans'])->name('admin.oiltrans');
Route::post('/oiltrans/add', [AdminController::class, 'soiltrans'])->name('store.oiltrans');


Route::get('/belts', [AdminController::class, 'vbelts'])->name('admin.belts');
Route::post('/belts/add', [AdminController::class, 'sbelts'])->name('store.belts');


Route::get('/battery', [AdminController::class, 'vbattery'])->name('admin.battery');
Route::post('/battery/add', [AdminController::class, 'sbattery'])->name('store.battery');


Route::get('/tire', [AdminController::class, 'vtire'])->name('admin.tires');
Route::post('/tire/add', [AdminController::class, 'stire'])->name('store.tire');






 //brand controller
 Route::get('/AddBrandPhoto', [AdminController::class, 'addbrand'])->name('admin.AddBrandPhoto');
 Route::post('/AddBrandPhoto/add', [AdminController::class, 'sbrand'])->name('store.brand');
 Route::get('/brand/edit/{id}', [AdminController::class, 'Ebrand']);
 Route::post('/brand/update/{id}', [AdminController::class, 'Ubrand']);
 Route::get('/brand/delete/{id}', [AdminController::class, 'Dbrand']);




 //accout controller
 Route::get('/accounts', [AdminController::class, 'acc'])->name('admin.accounts');
 Route::get('/account/edit/{id}', [AdminController::class, 'Edit']);
 Route::post('/account/update/{id}', [AdminController::class, 'Update']);
 Route::get('/account/delete/{id}', [AdminController::class, 'Delete']);
 Route::get('/account/view/{id}', [AdminController::class, 'UserProfile']);





 //ads route
 Route::get('/adminads', [AdminController::class, 'ads'])->name('admin.ads');
 Route::get('/sellcarads/delete/{id}', [AdminController::class, 'D3']);
 Route::get('/rentads/delete/{id}', [AdminController::class, 'D2']);
 Route::get('/sparepartsads/delete/{id}', [AdminController::class, 'D4']);
 Route::get('/tboaads/delete/{id}', [AdminController::class, 'D1']);







 //report route
 Route::get('/report', [AdminController::class, 'rep'])->name('admin.reports');

 // oldcar route
 Route::get('/oldcar', [AdminController::class, 'old'])->name('admin.AddOldCar');
 Route::post('/oldcar/add', [AdminController::class, 'sold'])->name('store.old');
 Route::get('/oldcar/edit/{id}', [AdminController::class, 'Eold']);
 Route::post('/oldcar/update/{id}', [AdminController::class, 'Uold']);
 Route::get('/oldcar/delete/{id}', [AdminController::class, 'Dold']);
 



//newcar route 
Route::get('/newcar/all', [AdminController::class, 'new'])->name('admin.AddNewCar');
Route::post('/newcar/add', [AdminController::class, 'store'])->name('store.new');
Route::get('/newcar/edit/{id}', [AdminController::class, 'Enew']);
Route::post('/newcar/update/{id}', [AdminController::class, 'Unew']);
Route::get('/newcar/delete/{id}', [AdminController::class, 'Dnew']);





Route::get('/suggestion', [AdminController::class, 'sugg'])->name('admin.suggestion');
Route::post('/suggestion/add', [AdminController::class, 'smiantenance'])->name('store.sugg');
Route::get('/suggestion/edit/{id}', [AdminController::class, 'Esugg']);
Route::post('/suggestion/update/{id}', [AdminController::class, 'Usugg']);
Route::get('/suggestion/delete/{id}', [AdminController::class, 'Dsugg']);





Route::get('/table', [AdminController::class, 'tables'])->name('admin.table');
Route::get('/infomain', [AdminController::class, 'main'])->name('page.infomaintance');
Route::post('/infomain/oil', [AdminController::class, 'oil'])->name('oil.car');






// Adham Routing
Route::get('/model/{brandNames}',[PageController::class,'model']  ) -> name('page.model')->middleware('IsLoggedIn');
Route::get('/model2/{brandNames}',[PageController::class,'model2']  ) -> name('page.model2')->middleware('IsLoggedIn');
Route::get('/model3/{brandNames}',[PageController::class,'model3']  ) -> name('page.model3')->middleware('IsLoggedIn');
Route::get('/model4/{brandNames}',[PageController::class,'model4']  ) -> name('page.model4')->middleware('IsLoggedIn');
Route::get('/Maintenance', [PageController::class,'Maintenance']) -> name('page.Maintenance');
Route::get('/info tboa/{modelNames}', [PageController::class,'infotboa']) -> name('page.infotboa')->middleware('IsLoggedIn');
Route::post('/info tboa/{modelNames}', [PageController::class,'insertTboaAds']) -> name('page.infotboa')->middleware('IsLoggedIn');
Route::get('/info sparepart/{modelNames}', [PageController::class,'infosparepart']) -> name('page.infosparepart')->middleware('IsLoggedIn');
Route::post('/info sparepart/{modelNames}', [PageController::class,'insertSparepartsAds']) -> name('page.infosparepart')->middleware('IsLoggedIn');
Route::get('/info rent/{modelNames}', [PageController::class,'inforent']) -> name('page.inforent')->middleware('IsLoggedIn');
Route::post('/info rent/{modelNames}', [PageController::class,'insertRentAds']) -> name('page.inforent')->middleware('IsLoggedIn');
Route::get('/info oil',[PageController::class,'infooil'] ) -> name('page.infooil');
Route::get('/info car/{modelNames}', [PageController::class,'infocar']) -> name('page.infocar')->middleware('IsLoggedIn');
Route::post('/info car/{modelNames}', [PageController::class,'sellCarAds']) -> name('page.infocar')->middleware('IsLoggedIn');
Route::get('/detail ads/{username}/{created_at}', [PageController::class,'detailads']) -> name('page.detailads');
Route::get('/category sell', [PageController::class,'categorysell']) -> name('page.categorysell')->middleware('IsLoggedIn')->middleware('WorkshopCannot');
Route::get('/brand', [PageController::class,'brand']) -> name('page.brand')->middleware('IsLoggedIn')->middleware('WorkshopCannot');
Route::get('/brand2', [PageController::class,'brand2']) -> name('page.brand2')->middleware('IsLoggedIn')->middleware('WorkshopCannot');
Route::get('/brand3', [PageController::class,'brand3']) -> name('page.brand3')->middleware('IsLoggedIn')->middleware('WorkshopCannot');
Route::get('/brand4', [PageController::class,'brand4']) -> name('page.brand4')->middleware('IsLoggedIn')->middleware('WorkshopCannot');
Route::get('/ads', [PageController::class,'ads']) -> name('page.ads');
Route::get('/changed details', [PageController::class,'changeddetails']) -> name('page.ichanged');
Route::get('/ads view', [PageController::class,'adsviews']) -> name('page.viewer');
Route::get('/new cars ads', [PageController::class,'newcarads']) -> name('page.newcarads');
Route::post('/new cars ads', [PageController::class,'favorite2']) -> name('page.newcarads')->middleware('IsLoggedIn');
Route::get('/used cars ads', [PageController::class,'usedcarads']) -> name('page.usedcarads');
Route::post('/used cars ads', [PageController::class,'favorite2']) -> name('page.usedcarads')->middleware('IsLoggedIn');
Route::get('/spareparts ads', [PageController::class,'sparepartads']) -> name('page.sparepartads');
Route::post('/spareparts ads', [PageController::class,'favorite']) -> name('page.sparepartads')->middleware('IsLoggedIn');
Route::get('/tboa ads', [PageController::class,'tboaads']) -> name('page.tboaads');
Route::post('/tboa ads', [PageController::class,'favorite']) -> name('page.tboaads')->middleware('IsLoggedIn');
Route::get('/rent cars ads', [PageController::class,'rentcarads']) -> name('page.rentcarads');
Route::post('/rent cars ads', [PageController::class,'favorite2']) -> name('page.rentcarads')->middleware('IsLoggedIn');
Route::get('/favorites/{username}', [PageController::class,'favoriteView']) -> name('page.favorites')->middleware('IsLoggedIn');
Route::post('/favorites/{username}', [PageController::class,'favorite']) -> name('page.favorites')->middleware('IsLoggedIn');
Route::post('/favorites/{username}', [PageController::class,'favorite2']) -> name('page.favorites')->middleware('IsLoggedIn');


                                //*** Ahmed Ehab Routing ***//

//Routing For Home Page //done
Route::get('/', [Home::class , 'HomeView'])->name('HomeView');

//Routing For HomeLogged Page //done
Route::get('/auth', [Home::class , 'HomeLoggedView'])->name('HomeLoggedView');

//Routing For Login //done
Route::get('/login', [register::class , 'start'])->name('view')->middleware('AlreadyLoggedIn');
Route::post('/add/user', [register::class , 'adduser'])->name('register.add');


//Routing For user Profile //done
Route::get('/auth/user/view', [register::class , 'checkuserview'])->name('logged.main')->middleware('IsLoggedIn')->middleware('AlreadyLoggedIn');

//Routing For user data check ***********
Route::post('/auth/user', [register::class , 'checkuser'])->name('check.user');

Route::get('/auth/user/home', [register::class , 'home'])->name('home')->middleware('IsLoggedIn');

//Routing For Logout *******
Route::get('/auth/user/logout', [register::class , 'logout'])->name('user.logout')->middleware('IsLoggedIn');


//Routing For user Password Update //done 
Route::post('/auth/user/editpassword/update', [PasswordUpdate::class , 'updateuser'])->name('updatepassword')->middleware('IsLoggedIn');

//Routing For user Email Update //done

Route::post('/auth/user/editemail/update', [register::class , 'emailupdate'])->name('update.email')->middleware('IsLoggedIn');

//Routing For user image update //done
Route::post('/auth/user/image/update', [register::class , 'userimageupdate'])->name('updateuserimage')->middleware('IsLoggedIn');

//Routing For WorkShop //done
Route::get('/auth/user/workshop', [WorkShops::class , 'WorkshopProfileView'])->name('workshop.main')->middleware('IsLoggedIn');
//workshop address update //done
Route::post('/auth/user/workshop/address', [WorkShops::class , 'Workshopaddressupdate'])->name('workshopmainaddressupdate')->middleware('IsLoggedIn');
//workshop phone update //done
Route::post('/auth/user/workshop/phone', [WorkShops::class , 'Workshopphoneupdate'])->name('workshopmainphoneupdate')->middleware('IsLoggedIn');
// workshop Image update //done
Route::post('/auth/user/workshop/image', [WorkShops::class , 'workshopimageupdate'])->name('workshopimageupdate')->middleware('IsLoggedIn');
// workshop password update //done
Route::get('/auth/user/workshop/edit/pass/main', [PasswordUpdate::class , 'updateworkshopview'])->name('workshopupdatepasswordview')->middleware('IsLoggedIn');
Route::post('/auth/user/workshop/edit/pass', [PasswordUpdate::class , 'updateworkshop'])->name('workshopupdatepassword')->middleware('IsLoggedIn');


//Routing for view add workshop posts //done
Route::get('/auth/user/workshop/add/post/view', [WorkShops::class , 'addpostview'])->name('workshopaddpostview')->middleware('IsLoggedIn');

//Routing for adding post in workshop  //done
Route::post('/auth/user/workshop/add/post', [WorkShops::class , 'addpost'])->name('workshopaddpost')->middleware('IsLoggedIn');

//Routing for WorkShop Post view //done
Route::get('/auth/user/workshop/post/view', [WorkShops::class , 'workshoppostview'])->name('workshoppostview')->middleware('IsLoggedIn');

//Routing For average view
//done
Route::get('/auth/user/average/main', [average::class , 'averageview'])->name('averageview')->middleware('IsLoggedIn');
//done
Route::post('/auth/user/average/car/data', [average::class , 'cardataupdate'])->name('cardata')->middleware('IsLoggedIn');
//done
Route::get('/auth/user/average/oil', [average::class , 'oilview'])->name('AverageForOil')->middleware('IsLoggedIn');
//done
Route::post('/auth/user/average', [average::class , 'averageOil'])->name('averageOil')->middleware('IsLoggedIn');
Route::get('/auth/user/average/part', [average::class , 'partsview'])->name('AverageForParts')->middleware('IsLoggedIn');

//Routing For Forget Password //done
Route::get('/forget/main', [register::class , 'forgetpasswordview'])->name('ForgetView')->middleware('AlreadyLoggedIn');
Route::post('/forget/email/check', [register::class , 'forgetpassword'])->name('ForgetSend');

//done
Route::get('/forget/password/reset', [register::class , 'forgetpasswordresetview'])->name('ForgetReset');
Route::post('/forget/password/reset/done', [register::class , 'forgetpasswordreset'])->name('ForgetResetdone');

//Routing For Auction

//done
Route::get('/auction/main', [AuctionController::class , 'auctionview'])->name('AuctionView')->middleware('IsLoggedIn');
// view bs
Route::get('/auction/add/main', [AuctionController::class , 'auctionaddview'])->name('AuctionAddView')->middleware('IsLoggedIn');
//done
Route::post('/auction/add', [AuctionController::class , 'auctionadd'])->name('AuctionAdd')->middleware('IsLoggedIn');
//done
Route::get('/auction/add/credit/main/{id}', [AuctionController::class , 'creditview'])->name('AuctionCreditView')->middleware('IsLoggedIn');
//done
Route::post('/auction/add/credit', [AuctionController::class , 'creditadd'])->name('AuctionCreditAdd')->middleware('IsLoggedIn');
//done
Route::get('/auction/details/main/{id}', [AuctionController::class , 'auctiondetailsview'])->name('AuctionDetailsView')->middleware('IsLoggedIn');
//done
Route::get('/auction/add/bid/{id}', [AuctionController::class , 'bidadd'])->name('AuctionBidAdd')->middleware('IsLoggedIn');

//auction approval routes
Route::get('/auctions/approval', [AuctionApproval::class, 'auctionsadminview'])->name('admin.auctionapproval')->middleware('IsLoggedIn');
Route::get('/auctions/approval/accept/{id}', [AuctionApproval::class, 'auctionsadminaccept'])->name('admin.auctionapprovalaccept')->middleware('IsLoggedIn');
Route::get('/auction/details/approval/{id}', [AuctionApproval::class , 'auctiondetailsview'])->name('admin.AuctionDetailsAdmin')->middleware('IsLoggedIn');
Route::get('/auctions/delete/{id}/{user}', [AuctionApproval::class, 'DeleteAuction'])->name('admin.AuctionDelete')->middleware('IsLoggedIn');

//routes for chat 
Route::get('/chat/{id}', [chat::class , 'chatview'])->name('chatview')->middleware('IsLoggedIn');
Route::get('/chat/add/message/{id}', [chat::class , 'addmessage'])->name('addmessage')->middleware('IsLoggedIn');

