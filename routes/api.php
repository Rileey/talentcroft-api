<?php
header('Accept: application/json', true);

use App\Http\Controllers\{
    UserController,
    ProjectController,
    SettingsController,
    ProjectFileController,
    ProjectTicketController,
    ProjectDiscountController,
    ProjectDiscountUsagesController,
    ApiController
};
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//public routes
    /** AUTHENTICATION AND USER DETAILS */
    Route::group(['prefix' => 'user'], function () {
        // login
        Route::post('/login', [UserController::class, 'login']);
        // register
        Route::post('/register', [UserController::class, 'register']);
        // update user credentials
        Route::post('/update/{id}', [UserController::class, 'updateUser']);

        //get all users
        Route::get('/allusers', [UserController::class,'getAllUsers']);
        //get a user
        Route::get('/{id}', [UserController::class,'getUser']);

        // forgetpassword
        Route::post('/forgetpassword', [UserController::class, 'forgetpassword']);

        // reset password
         Route::post('/resetpassword', [UserController::class, 'resetpassword']);

        // find all post
         Route::get('/allpost', [UserController::class, 'getAllPost']);

        //  delete a post
        Route::get('/deletepost/{id}', [UserController::class, 'deletePost']);

        //  create account details
        Route::post('/create/account', [UserController::class, 'createAccount']);

         //  get account
        Route::get('/getaccount/{id}', [UserController::class, 'getAccountDetails']);


    });



